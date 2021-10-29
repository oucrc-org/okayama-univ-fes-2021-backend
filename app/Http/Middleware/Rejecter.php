<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class Rejecter
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
        return response()->json(['success' => false, 'message' => 'Not Found'], 404);
    }
}
