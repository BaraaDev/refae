<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
class Admin
{

    public function handle($request, Closure $next)
    {



        if(Auth::user() && Auth::user()->rolez_id == 1)
        {
            return $next($request);

        }else{

            abort('404');
        }

    }
}
