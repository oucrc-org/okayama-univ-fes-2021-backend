<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;
use Exception;

class CheckAccessToken
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
        if ($request->hasHeader('Access-Token')) {
            $accessToken = $request->header('Access-Token');
            try {
                $request->googleUser = Socialite::driver('google')->stateless()->userFromToken($accessToken);
                return $next($request);
            } catch (Exception $exception) {
                return response()->json(['success' => false, 'message' => 'Authentication failed.'], 401);
            }
        } else {
            return response()->json(['success' => false, 'message' => 'Missing Access Token.'], 401);
        }
    }
}
