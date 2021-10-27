<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{

    function get(): JsonResponse
    {
        //ユーザー情報
        $user = Auth::user();

        /** @noinspection PhpPossiblePolymorphicInvocationInspection */
        //スタンプ情報
        $stamps = $user->questions()
            ->select('stamp_id')
            ->with('stamp')
            ->get()->map(function ($item){
                return $item->stamp->only(['id', 'name','image_path']);
            });

        return response()->json([
            'success' => true,
            'user' => $user,
            'stamps' => $stamps
        ]);
    }
}
