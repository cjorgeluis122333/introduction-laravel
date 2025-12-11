<?php

namespace App\Http\Controllers\middleware;

use Closure;
use Illuminate\Http\Request;

/**
 * This is the structure of the middleware.
 * And I use this middleware in the boostrap/app like a Global Middleware
 */
class SampleMiddleware
{
    public function handle(Request $request, Closure $next)
    {
        return $next($request);
    }
}
