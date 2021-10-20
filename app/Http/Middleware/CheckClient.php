<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class CheckClient
{
    /**
     * Handle an incoming request.
     *
     * @param Request $request
     * @param Closure $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if ($request->header('Client-Api-Key') == env('CLIENT_API_KEY')) {
            return $next($request);
        } else {
            return response()->json(['success' => false, 'message' => 'Invalid Client Api Key.'], 401);
        }
    }
}
