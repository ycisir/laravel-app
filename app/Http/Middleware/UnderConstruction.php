<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Exception\HttpException;

class UnderConstruction
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     * 
     * Middleware provide a convenient mechanism for inspecting and filtering HTTP requests entering your application located in app/Http/Middleware dir
     * There are three ways to Register middleware
     * 1. Global middleware
     * 2. Assigning middleware to routes
     * 3. Middleware group
     */
    public function handle(Request $request, Closure $next, $role): Response
    {
        // dd($request); // dump and die function
        // dd($next($request));
        // throw new HttpException(503);
        
        // explore handle method
        // if($role == 'guest') {
        //     return redirect('/');
        // }
        return($next($request));
        
    }
}
