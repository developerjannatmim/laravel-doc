<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class Editor
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // if(auth()->user()->is_editor == auth()->user()->has_role){
        //     return $next($request);
        // }

        if( auth()->user()->is_editor ){
            return $next($request);
        }
        abort(401);
    }
}
