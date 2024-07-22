<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Auth;
class EnsureUserIsAuthenticated
{
    public function handle(Request $request, Closure $next)
    {
        if (!Auth::check()) {
            // إذا لم يكن المستخدم مصادقًا، قم بتوجيهه إلى صفحة تسجيل الدخول
            return redirect()->route('login')->with('error', 'يجب عليك تسجيل الدخول أولاً');
        }

        return $next($request);
    }
}