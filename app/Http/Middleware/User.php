<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class User
{

    public function handle($request, Closure $next)
    {
        if(Auth::check() && Auth::user()->rolez_id == 4){

            return $next($request);

        }else{

            return redirect()->route('login');
        }

    }
}
