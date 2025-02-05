<?php

namespace App\Http\Controllers;
use Laravel\Socialite\Facades\Socialite;
use Exception;
use App\Models\User;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Log;


class LoginController extends Controller
{
    // Handle login
    public function login(Request $request)
    {
        // Validate input
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        // Attempt authentication
        if (Auth::attempt($request->only('email', 'password'), $request->has('remember'))) {
            return redirect()->route('profile'); // Redirect to the intended route
        }
        // Store the login error message in the session
        return redirect()->back()
            ->withInput($request->only('email')) // Keep email input after refresh
            ->with('loginError', true)
            ->withErrors(['email' => 'Invalid credentials']);

        // return back()->withErrors(['loginError' => true, 'email' => 'Invalid credentials']);
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/')->with('message', 'Logged out successfully!');
    }

    public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
    }

    public function handleGoogleCallback()
    {
        try {
            $googleUser = Socialite::driver('google')->user();

            // Check if the user already exists in the database
            $user = User::where('email', $googleUser->getEmail())->first();

            if (!$user) {
                // Create a new user if not found
                $user = User::create([
                    'name' => $googleUser->getName(),
                    'email' => $googleUser->getEmail(),
                    'google_id' => $googleUser->getId(),
                    'password' => bcrypt(str()->random(16)), // Assign a random password
                ]);
            }

            // Log the user in
            Auth::login($user);

            return redirect()->route('profile')->with('success', 'Logged in successfully');
        } catch (Exception $e) {
            return redirect('login')->with('error', 'Google login failed');
        }
    }
    public function showLinkRequestForm()
    {
        return view('reset-password');
    }

    public function sendResetLinkEmail(Request $request)
    {
        $request->validate(['email' => 'required|email']);

        $status = Password::sendResetLink($request->only('email'));

        return $status === Password::RESET_LINK_SENT
            ? back()->with(['status' => __($status)])
            : back()->withErrors(['email' => __($status)]);
    }

    public function showResetForm($token)
    {
        return view('password-change', ['token' => $token]);
    }

    public function reset(Request $request)
    {
        $request->validate([
            'token' => 'required',
            'email' => 'required|email',
            'password' => 'required|min:8|confirmed',
        ]);

        $status = Password::reset(
            $request->only('email', 'password', 'password_confirmation', 'token'),
            function ($user, $password) {
                $user->password = Hash::make($password);
                $user->save();
            }
        );

        return $status === Password::PASSWORD_RESET
            ? redirect()->route('login')->with('status', __($status))
            : back()->withErrors(['email' => [__($status)]]);
    }

    // Send OTP to the user's email
    public function sendOtp(Request $request)
    {
        $request->validate(['otpemail' => 'required|email'], [], [], 'otp_form');

        $otp = rand(100000, 999999);
        $email = $request->otpemail;

        // Store OTP in session (You can use Redis/DB for scalability)
        Session::put('otp_' . $email, $otp);
        Session::put('otp_expiry_' . $email, now()->addMinutes(30));
        Session::put('otp_email', $email);

        // Send OTP via email
        Mail::raw("Your OTP is: $otp", function ($message) use ($email) {
            $message->to($email)
                ->subject('Your Login OTP');
        });

        return redirect()->route('verify-otp')->with('success', 'OTP sent successfully to ' . $email);
    }


    public function verifyOtp(Request $request)
    {
        $request->validate([
            'otp' => 'required|digits:6'
        ]);

        $email = $request->email;
        $otp = $request->otp;

        if (Session::get('otp_' . $email) != $otp || now()->gt(Session::get('otp_expiry_' . $email))) {
            return response()->json(['message' => 'Invalid or expired OTP'], 422);
        }

        // Check if user exists
        $user = User::where('email', $email)->first();

        if (!$user) {
            // Create user if not exists
            $user = User::create([
                'name' => explode('@', $email)[0],
                'email' => $email,
                'password' => Hash::make($otp) // Set dummy password
            ]);
        }

        // Login the user
        Auth::login($user);

        // Clear OTP from session
        Session::forget(['otp_' . $email, 'otp_expiry_' . $email]);

        return redirect()->route('profile')->with('success', 'Logged in successfully');
    }
}
