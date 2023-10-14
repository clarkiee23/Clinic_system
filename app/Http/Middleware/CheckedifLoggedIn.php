<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class CheckedifLoggedIn
{
    
    public function handle(Request $request, Closure $next)
    {
        if(Auth::check()){
            return redirect()->route("dashboard");
        }
            return $next($request);
    }
}
