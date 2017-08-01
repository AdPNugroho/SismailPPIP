<?php

namespace App\Http\Middleware;

use Closure;

class sekreCheck
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
        if(session('level')!="sekre"){
            return redirect('/');
        }
        return $next($request);
    }
}
