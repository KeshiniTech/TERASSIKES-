<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  $guard
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {
        // if (Auth::guard($guard)->check()) {
        //     return redirect('/home');
        // }

        if(Auth::guard($guard)->check() && Auth::user()->role == 'superadmin'){
            return redirect()->route('superadmin');
        }elseif(Auth::guard($guard)->check() && Auth::user()->role == 'admin'){
            return redirect()->route('admin');
        }elseif(Auth::guard($guard)->check() && Auth::user()->role == 'user'){
            return redirect()->route('home');
        }

        return $next($request);
    }
}
