<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class UserController extends Controller
{
    function getProfile(Request $request): JsonResponse
    {
        $user = User::query()->findOrFail($request->user_id);
        return response()->json(['success' => true, 'data' => $user]);
    }
}
