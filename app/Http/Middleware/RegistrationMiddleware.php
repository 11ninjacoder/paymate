<?php

namespace App\Http\Middleware;

use Closure;

class RegistrationMiddleware
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
        //echo "<br>  I am in middleware !!";
        return $next($request);
    }
}
