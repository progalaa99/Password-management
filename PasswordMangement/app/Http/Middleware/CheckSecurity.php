<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
// use Illuminate\Support\Facades\Session;
use App\Models\Session;


class CheckSecurity
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    { 
        
        $allowedIPs = Session::get('ip_address');
        $allowedIPsArray = $allowedIPs->toArray();
        $userIP = $request->ip();
        
        if (!in_array($userIP, $allowedIPsArray)) 
            return response('You are safe  '); 
        else return response('An unauthorized entry has been detected', 401); 
             
        
        return $next($request);   
    }
}
