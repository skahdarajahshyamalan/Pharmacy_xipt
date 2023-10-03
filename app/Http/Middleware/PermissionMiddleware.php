<?php

namespace App\Http\Middleware;

use Closure;
use Auth;
class PermissionMiddleware
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
        //return $next($request);
        if (Auth::check() && Auth::user()->role_id == '2') {
            return $next($request);
        }
        abort(403);
    }
}
