<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class UserAuth
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
        if ($request->path()=="login" && $request->session()->has('user'))
        {
            return redirect('/');
        }

        if (($request->path()=="add_to_cart" || $request->path()=="cart_list" || $request->path()=="order_now" || $request->path()=="my_orders")
         && !$request->session()->has('user'))
        {
            return redirect('/login');
        }
        return $next($request);
    }
}
