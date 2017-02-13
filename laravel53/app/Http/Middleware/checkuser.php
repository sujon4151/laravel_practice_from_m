<?php

namespace App\Http\Middleware;

use Closure;
use Session;
session_start();
class checkuser
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
        if (Session::get('admin_name')==null) {
             return redirect('/login')->send();  
        }
        return $next($request);
    }
}
