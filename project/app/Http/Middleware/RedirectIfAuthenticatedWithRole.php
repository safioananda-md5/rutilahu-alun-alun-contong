<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class RedirectIfAuthenticatedWithRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (Auth::check()) {
            $user = Auth::user();

            // redirect sesuai role
            switch ($user->role) {
                case 'admin99':
                    return redirect()->route('admin.dashboard_admin');
                case 'user':
                    return redirect('/home');
                default:
                    return redirect('/');
            }
        }

        return $next($request);
    }
}
