<?php

namespace App\Http\Middleware;

use Closure;
use Auth;
class Agent
{

    public function handle($request, Closure $next)
    {
        if(Auth::check() && Auth::user()->rolez_id == 3){

            return $next($request);

        }else{

            abort('404');
        }
    }
}
