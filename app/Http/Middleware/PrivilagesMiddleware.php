<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class PrivilagesMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next, $role)
    {
        //$roles = explode('|',$role);
        $loginUserRole = auth()->user()->role;
        if($loginUserRole != $role){
            return redirect()->route('dashboard');
        }
        return $next($request);
    }
}
