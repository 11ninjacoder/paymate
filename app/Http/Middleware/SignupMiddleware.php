<?php

namespace App\Http\Middleware;

use Closure;

class SignupMiddleware
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
        echo "<br>  I am in signup middleware !!";
        return $next($request);
    }
}
