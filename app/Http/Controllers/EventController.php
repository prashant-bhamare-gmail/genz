<?php

namespace App\Http\Controllers;
use App\Models\Event;
use App\Models\EventRegistration;
use Carbon\Carbon;
use Illuminate\Support\Facades\Log;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class EventController extends Controller
{
    public function eventpage()
    {
        $today = Carbon::today();

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
            ->where('id', '!=', optional($nextEvent)->id) // Exclude the next event
            ->orderBy('event_date', 'asc')
            ->get();

        // Log::info('Completed Events: ' . $completedEvents);
        // Log::info('Next Event: ' . $nextEvent);
        // Log::info('Upcoming Events: ' . $upcomingEvents);
        return view('event', compact('completedEvents', 'nextEvent', 'upcomingEvents'));
    }

    public function checkLogin($eventId) {
        Log::info('Event ID: ' . $eventId);
        Log::info('User: ' . Auth::user());
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
    public function register(Request $request, $eventId) {
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

        return response()->json([
            'message' => 'Successfully registered for the event!'
        ], 201);
    }
}
