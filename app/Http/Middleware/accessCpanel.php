<?php

namespace vecmocon\Http\Middleware;

use Closure;

class accessCpanel
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
        if(!Config('cpanel.pref.allowAccess')){
            abort(403);
        }
        
        return $next($request);
    }
}
