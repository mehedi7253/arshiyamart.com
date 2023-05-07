<?php

namespace App\Http\Middleware;

use Closure;
use Session;

class FontLogin
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
      
        if (empty(Session::has('fontSession'))) {
          return redirect('/login-register');
        }
        return $next($request);
    }
}
