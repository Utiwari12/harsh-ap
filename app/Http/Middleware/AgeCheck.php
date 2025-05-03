<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AgeCheck
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        //echo "Age Check Middleware<br>";
       // echo "<pre>";
        //print_r($request);
        //echo "</pre>";
        print_r($request->age); //global variables
        if($request->age < 18){
            die ("You are not allowed to visit this page");
            
        }
        //print_r($request->All());
        return $next($request);
    }
}
