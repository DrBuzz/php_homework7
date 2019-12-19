<?php

namespace App\Http\Middleware;

use Closure;

class api
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if (($request->header('x-api-key')) !== (env('APP_KEY'))) {
            return response(401);
        }
        return $next($request);
    }
}
