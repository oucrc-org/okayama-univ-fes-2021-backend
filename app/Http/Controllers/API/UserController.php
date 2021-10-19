<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    function getProfile(): JsonResponse
    {
        $user = Auth::user();
        return response()->json(['success' => true, 'data' => $user]);
    }
}
