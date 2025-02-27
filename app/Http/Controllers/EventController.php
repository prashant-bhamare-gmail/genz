<?php

namespace App\Http\Controllers;
use App\Models\Event;
use App\Models\EventRegistration;
use Carbon\Carbon;
use Illuminate\Support\Facades\Log;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Mail;
use App\Mail\EventRegistrationMail;
use App\Mail\EventCancellationMail;

class EventController extends Controller
{
    public function eventpage()
    {
        $today = Carbon::today();
        $user = auth()->user();

        // Completed Events (Last 4 past events)
        $completedEvents = Event::where('event_date', '<', $today)
            ->orderBy('event_date', 'desc')
            ->limit(4)
            ->get();

        // Next Event (The closest upcoming event)
        $nextEvent = Event::where('event_date', '>=', $today)
            ->orderBy('event_date', 'asc')
            ->first();

        // Upcoming Events (Excluding the Next Event)
        $upcomingEvents = Event::where('event_date', '>', $today)
            ->where('id', '!=', optional($nextEvent)->id)
            ->orderBy('event_date', 'asc')
            ->get();

        // Check if the user is already registered for these events
        $registeredEvents = [];
        if ($user) {
            $registeredEvents = EventRegistration::where('user_id', $user->id)
                ->get(['id', 'event_id'])
                ->toArray(); // Get IDs of registered events
        }

        Log::info('Completed Events: ' . json_encode($upcomingEvents));
        Log::info('Next Event: ' . json_encode($registeredEvents));
        return view('event', compact('completedEvents', 'nextEvent', 'upcomingEvents', 'registeredEvents'));
    }


    public function checkLogin($eventId)
    {
        if (!Auth::check()) {
            return redirect()->route('event')->with('eventId', $eventId);
        }
        return $this->eventbooking($eventId);
    }

    // Event Details
    public function eventbooking($eventId)
    {

        if (!Auth::check() && !Session::has('guest_logged_in')) {
            return redirect()->route('event', [
                'showLogin' => true,
                'guestLogin' => true,
                'redirect_to' => route('event-booking', ['eventId' => $eventId])
            ]);
        }
        $event = Event::findOrFail($eventId);
        return view('event-booking', compact('event'));

    }


    // Register for an event
    public function register(Request $request, $eventId)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:event_registrations,email,NULL,id,event_id,' . $eventId,
            'company_name' => 'required|string|max:255',
            'designation' => 'required|string|max:255',
            'contact_number' => 'required|string|max:15',
            'interested' => 'required|boolean'
        ]);

        $event = Event::findOrFail($eventId);

        EventRegistration::create([
            'event_id' => $eventId,
            'name' => $request->name,
            'email' => $request->email,
            'company_name' => $request->company_name,
            'designation' => $request->designation,
            'contact_number' => $request->contact_number,
            'interested' => $request->interested,
        ]);

        Mail::to($request->email)->send(new EventRegistrationMail($event, $user ?? (object) ['name' => $request->name]));

        return response()->json([
            'message' => 'Successfully registered for the event!'
        ], 201);
    }

    public function guestaccountsendOtp(Request $request)
    {
        session(['redirect_to' => $request->input('redirect_to', route('profile'))]);
        $request->validate(['otpemail' => 'required|email'], [], [], 'otp_form');

        $otp = rand(100000, 999999);
        $email = $request->otpemail;

        Session::put('otp_' . $email, $otp);
        Session::put('otp_expiry_' . $email, now()->addMinutes(30));
        Session::put('otp_email', $email);

        // Send OTP via email
        Mail::raw("Your OTP is: $otp", function ($message) use ($email) {
            $message->to($email)
                ->subject('Your Login OTP');
        });

        return redirect()->back()->with([
            'success' => 'OTP sent successfully to ' . $email,
            'guest_verify_otp' => true
        ]);
    }

    public function guestverifyotp(Request $request)
    {
        $request->validate([
            'otp' => 'required|digits:6'
        ]);

        $email = $request->email;
        $otp = $request->otp;

        if (Session::get('otp_' . $email) != $otp || now()->gt(Session::get('otp_expiry_' . $email))) {
            // return response()->json(['message' => 'Invalid or expired OTP'], 422);
            return redirect()->back()
                ->withInput(input: $request->only('otp')) // Keep email input after refresh
                ->with('invalidotp', true)
                ->withErrors(['otp' => 'Invalid or expired OTP']);
        }

        session()->put('guest_logged_in', true);
        session()->put('guest_login_time', now()); // Store the login time

        $redirectTo = session('redirect_to', route('profile'));
        session()->forget('redirect_to'); // Clear session after use


        // Clear OTP from session
        Session::forget(['otp_' . $email, 'otp_expiry_' . $email]);


        return redirect($redirectTo);
    }

    public function storeEventBooking(Request $request)
    {
        $validatedData = $request->validate([
            'event_id' => 'required|exists:events,id',  // Ensures event exists
            'user_id' => 'nullable|exists:users,id',   // Ensures user exists if provided
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'company_name' => 'required|string|max:255',
            'designation' => 'required|string|max:255',
            'contact_number' => 'required|string|max:20',
            'interested' => 'required|boolean'
        ]);

        $user = auth()->user();
        $event = Event::findOrFail($request->event_id);

        // Store registration
        $registration = EventRegistration::create([
            'event_id' => $event->id,
            'user_id' => $user ? $user->id : null, // Store if logged in
            'name' => $request->name,
            'email' => $request->email,
            'company_name' => $request->company_name,
            'designation' => $request->designation,
            'contact_number' => $request->contact_number,
            'interested' => $request->interested,
        ]);

        // Send confirmation email
        Mail::to($request->email)->send(new EventRegistrationMail($event, $user ?? (object) ['name' => $request->name]));

        return redirect()->route('event', ['id' => $request->event_id])
            ->with('success', 'You have successfully registered for the event!');
    }

    public function cancelRegistration($id)
    {
        $event = EventRegistration::find($id);

        if (!$event) {
            return redirect()->route('event')->with('success', 'Event booking has been canceled successfully');
        }

        // Get event details
        $eventName = $event->name; // Adjust field name
        $userEmail = auth()->user()->email; // Ensure user is authenticated
        $userName = auth()->user()->name; // Get user name

        // Send cancellation email
        Mail::to($userEmail)->send(new EventCancellationMail($eventName, $userName));

        // Delete the event booking
        $event->delete();

        return redirect()->route('event')->with('success', 'Event booking has been canceled successfully');
    }
}
