<?php

namespace App\Http\Middleware;

use App\Models\User;
use Closure;
use Illuminate\Http\Request;

class Register
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
        if (!User::query()->find($request->googleUser->id))
            User::query()->create([
                'id' => $request->googleUser->id,
                'display_name' => $request->googleUser->name,
                'email' => $request->googleUser->email,
                'email_verified' => $request->googleUser->user['email_verified'],
                'avatar_url' => $request->googleUser->avatar,
            ]);

        $request->user_id = $request->googleUser->id;

        return $next($request);
    }
}
