<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class AdminAuth3
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        if (auth()->check()){
            if(auth()->user()->empresa_id == '3')
            {
            return $next($request);
            }

        }

        if (auth()->check()){
            if(auth()->user()->empresa_id == '0')
            {
            return $next($request);
            }
            
        }

        return redirect()->route('inicio.portales', array ('somosmas'=>'Not found'));
    }
}
