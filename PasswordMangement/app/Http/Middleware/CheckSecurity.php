<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Session;


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
        // session()->put('ip', $ip_address);
        
        // $storedIp = $request->session()->get('ip');
        $storedUserAgent = $request->session()->get('user_agent');
        $storedIp = Session::get('ip');
        dd($storedIp);
        $allowedIPs = ['192.168.0.1', '192.168.0.2']; // قائمة بالـ IP المصرح بها

        $userIP = $request->ip();
        $currentUserAgent = $request->userAgent();
        // dd($currentIp);

        if (!in_array($userIP, $allowedIPs)) {
            return response('تم اكتشاف دخول غير مصرح به ', 401); // إرجاع رد غير مصرح به
        }
        
        return $next($request);
    }
}
