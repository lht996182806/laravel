<?php

namespace App\Http\Middleware;

use Closure;

class UserAdminLogin
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
        if(session('uid')){
            return $next($request);
        }else{
            return redirect('/admin/login/login')->with('error','请登录您的账户');
        }
        
    }
}
