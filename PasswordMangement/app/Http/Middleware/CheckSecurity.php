<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CheckSecurity
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    { 
        // dd('haaaa?');
        $storedIp = $request->session()->get('ip');
        $storedUserAgent = $request->session()->get('user_agent');
        $currentIp = $request->ip();
        $currentUserAgent = $request->userAgent();
        dd($currentUserAgent);
        if ($currentIp !== $storedIp || $currentUserAgent !== $storedUserAgent) {
            // تنبيه أمان للمستخدم
            return redirect()->back()->with('security_alert', 'تم اكتشاف دخول غير مصرح به.');
        }
        return $next($request);
    }
}
