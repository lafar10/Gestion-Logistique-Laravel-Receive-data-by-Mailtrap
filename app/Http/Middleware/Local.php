<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class Local
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        $availablelocales = ['ar','en'];
        $local = session('APP_LOCALE');
        $local = in_array($local,$availablelocales) ? $local : config('app.locale');
        app()->setLocale($local);
        return $next($request);
    }
}
