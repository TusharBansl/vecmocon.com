<?php

namespace vecmocon\Http\Middleware;

use Closure;

class accessSite
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
      if(url()->current() != url('cpanel') && !Config('site.pref.publish')) {
        abort(503);
      } 
      return $next($request);
    }
}
