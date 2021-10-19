<?php

namespace App\Http\Middleware;

use App\Models\User;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
        if (User::query()->where('google_id', $request->googleUser->id)->doesntExist())
            User::query()->create([
                'google_id' => $request->googleUser->id,
                'display_name' => $request->googleUser->name,
                'email' => $request->googleUser->email,
                'email_verified' => $request->googleUser->user['email_verified'],
                'avatar_url' => $request->googleUser->avatar,
            ]);

        $user = User::query()->where('google_id', $request->googleUser->id)->first();
        /** @noinspection PhpParamsInspection */
        Auth::login($user);
        return $next($request);
    }
}
