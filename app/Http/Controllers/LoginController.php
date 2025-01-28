<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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

        return back()->withErrors(['email' => 'Invalid credentials']);
    }

    public function logout()
    {
        Auth::logout(); // Logs out the user
        return redirect('/')->with('message', 'Logged out successfully!');
    }
}
