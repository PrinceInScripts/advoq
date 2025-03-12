<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class AdminAuthenticate
{
    public function handle(Request $request, Closure $next)
    {
        if (!Auth::check()) {
            return Redirect::route('admin.login'); // Redirect unauthenticated users to /admin/login
        }

        return $next($request);
    }
}
