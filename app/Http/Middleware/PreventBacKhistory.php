<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class PreventBacKhistory
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
        $respon = $next($request);
        return $respon->header('Cache-Control','nocache,no-store,max-age=0,must-revalidate')
                      ->header('pragma','no-cache')
                      ->header('Expires','sun, 12 Nov 1999 00:00:00 GMT');
    }
}
