<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class HttpHeaders
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        /*$response = $next($request);
        $response->header('X-POST', 'Post API');
        return $response;*/
        return $next($request);
    }
}
