<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class GuestSessionExpiry
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next)
    {
        // Check if guest is logged in
        if (session()->has('guest_logged_in')) {
            $loginTime = session('guest_login_time');
            $expired = now()->diffInMinutes($loginTime) > 10; // 20 minutes
            if ($expired) {
                session()->forget(['guest_logged_in', 'guest_login_time']);
                return redirect()->route('event', [
                    'showLogin' => true,
                    'guestLogin' => true
                ]);
            }
        }

        return $next($request);
    }
}