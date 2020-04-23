<?php

namespace App\Http\Middleware;

use Closure;

class CheckPetugas
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
        if (auth()->user()->status != 'siswa') {
            return $next($request);
        } else {
            return redirect()->back();
        }   
    }
}
