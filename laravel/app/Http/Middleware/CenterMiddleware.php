<?php

namespace App\Http\Middleware;

use Closure;

class CenterMiddleware
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
        if(session('id') || session('user')){
         return $next($request);
     }else{
        return redirect('/hindex')->with('error','您还没有登陆 不能访问个人中心');
     }
    }
}
