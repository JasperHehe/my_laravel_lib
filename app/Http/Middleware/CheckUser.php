<?php

namespace App\Http\Middleware;

use Closure;

class CheckUser
{

    /**
     * 
     * @param unknown $request
     * @param Closure $next
     * @param string $guard
     * @author Jasper (2018-3-12)
     */
    public function handle($request, Closure $next, $guard = null)
    {
        return $next($request);
    }
    
}
