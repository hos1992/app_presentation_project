<?php

namespace App\Http\Middleware;

use Closure;

class SetLocaleMiddleware
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

        $availableLocales = ['ar', 'en'];

        if(session('locale') && in_array(session('locale'), $availableLocales)){
            app()->setLocale(session('locale'));
        }

        return $next($request);
    }
}
