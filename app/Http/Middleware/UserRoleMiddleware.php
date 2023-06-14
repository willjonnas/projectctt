<?php


namespace App\Http\Middleware;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class UserRoleMiddleware
{


    // Add custom parameter $role which pass from Route.php
    public function handle(Request $request, Closure $next, $role)
    {

        if (Auth::check() && Auth::user()->role == 'admin') {
            return $next($request);
        } elseif (Auth::check() && Auth::user()->role == 'user') {
            return $next($request);
        } else {

            return response()->json(['You do not have permission to access for this page.']);
        }

    }
}
