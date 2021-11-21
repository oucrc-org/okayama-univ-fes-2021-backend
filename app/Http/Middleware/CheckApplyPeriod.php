<?php

namespace App\Http\Middleware;

use Carbon\Carbon;
use Closure;
use Illuminate\Http\Request;

class CheckApplyPeriod
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
        $today = Carbon::now();

        $start = new Carbon('2021-11-16');
        $end = new Carbon('2021-11-23');
        if ($today->between($start, $end))
            return $next($request);
        else
            return response()->json(['success' => false, 'message' => 'Not Found'], 404);
    }
}
