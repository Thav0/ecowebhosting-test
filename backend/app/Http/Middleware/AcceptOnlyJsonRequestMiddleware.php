<?php

namespace App\Http\Middleware;

use Closure;

class AcceptOnlyJsonRequestMiddleware
{
    /**
     * We only accept json
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        // Verify if POST request is JSON
        if ($request->isMethod('post') && !$request->expectsJson()) {
            return response(['message' => 'Only JSON requests are allowed'], 406);
        }

        return $next($request);
    }
}
