<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TamuMiddleware
{
    public function handle(Request $request, Closure $next)
    {
        if (Auth::check() && Auth::user()->role === 'tamu') {
            return $next($request);
        }

        return redirect('/')->with('error', 'Akses ditolak.');
    }
}
