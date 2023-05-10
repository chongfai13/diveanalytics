<?php
# Write a middleware in Laravel that checks if the user is authorized to access a specific resource. 
# The middleware should take the resource's ID as a parameter and use the currently authenticated user's ID 
# to check if they have access to the resource. If the user is not authorized, return a 403 Forbidden response. 
# Otherwise, continue with the request.

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Auth\Middleware\Authenticate as Middleware;

class CheckResourceAuthorization
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if (auth()->user()->status == 'active') {
            return $next($request);
        }
        return response()->json('Your account is inactive');

    }
}


