<?php

namespace App\Http\Middleware;

use Closure;

class CheckTokenMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \Closure $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $header_token = $request->header("TOKEN");
        $event_token = env("SERVICE_KEY_CONNECTION");

        if ($header_token) {
            if ($header_token == $event_token) {
                return $next($request);
            } else {
                return response()->json("Unauthorized", 401);
            }
        } else {
            return response()->json("Unauthorized", 401);
        }
    }
}
