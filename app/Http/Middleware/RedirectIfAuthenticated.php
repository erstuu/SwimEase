<?php

namespace App\Http\Middleware;

use App\Providers\RouteServiceProvider;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, ...$guards)
    {
        $guards = empty($guards) ? [null] : $guards;

        foreach ($guards as $guard) {
            if (Auth::guard($guard)->check()) {
                $user = Auth::guard($guard)->user();

                // Redirect based on the user's role
                if ($user->role === 'admin') {
                    return redirect()->route('admin.dashboard'); // Redirect to admin dashboard
                } elseif ($user->role === 'user') {
                    return redirect()->route('dashboard'); // Redirect to user dashboard (/lesku)
                }
            }
        }

        // If the user is not authenticated, proceed to the next middleware
        return $next($request);
    }
}
