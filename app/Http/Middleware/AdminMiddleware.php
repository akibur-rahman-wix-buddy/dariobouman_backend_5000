<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class AdminMiddleware
{
    /**
     * Handle an incoming request and check for admin access.
     *
     * This middleware checks if the authenticated user has the 'admin' role.
     * If the user is an admin, the request is allowed to proceed; otherwise,
     * a 403 Forbidden response is returned.
     *
     * @param  \Illuminate\Http\Request  $request  The incoming request instance.
     * @param  \Closure  $next  The next middleware to call.
     * @return \Symfony\Component\HttpFoundation\Response  The response instance (either the next response or a 403 error).
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (Auth::check() && Auth::user()->role == 'admin') {
            return $next($request);
        }
        return abort(403, 'Forbidden');
    }
}
