<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  $guard
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {
        //it using for while we access admin/home when user was logged in, we can access admin login, if it's not, you just will get user dashboard, can not access admin login page or others
        //-- ShouHax Scriptor Quote --
        switch ($guard) {
            case 'admin':
                if (Auth::guard($guard)->check()) {
                return redirect('admin/home');
         }
                break;
            
            default:
                if (Auth::guard($guard)->check()) {
                return redirect('/home');
            }
                break;
        }
         
        return $next($request);
    }
}
