<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class users
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
          //chech if auth
       if(Auth::check()){
        return $next($request);
       }else{
        return redirect('/login');
       }
    }
}
