<?php

namespace App\Http\Middleware;

use Closure;

class loginCheck
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
        if(session('level')=="admin"){
            return redirect('/adm');
        }else if(session('level')=="sec"){
            return redirect('/sec');
        }else if(session('level')=="kasi"){
            return redirect('/kasi');
        }
        return $next($request);
    }
}
