<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Cek_login
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next, $role)
    {
        // return $next($request);
        if(!Auth::check()){
            return redirect('login');
        }

        $user = Auth::user();

        if ($user->roles == $role){
            return $next($request);
        } 

       return redirect('/login')->with('error', 'You dont have this permission pls go back, fucc u');
    }
}
