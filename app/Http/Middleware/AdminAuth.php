<?php

namespace App\Http\Middleware;

use Closure;
use App\Models\Constants;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminAuth
{

    public function handle(Request $request, Closure $next, $guard = null)
    {
       
        if(!Auth::guard($guard)->check()) {
            return redirect()->route('login');
        }
        $user = Auth::user();
        if($user->role !== Constants::$USER_ROLE_ADMIN) {
            return redirect()->route('admin.dashboard');
        }
        return $next($request);
    }
}
