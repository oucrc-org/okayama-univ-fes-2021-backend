<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{

    private $mUser;

    function __construct(User $user)
    {
        $this->mUser = $user;
    }

    function get(): JsonResponse
    {
        try
        {
            //ユーザー情報
            $user_id = auth()->id();

            $user = $this->mUser->query()
                ->findOrFail($user_id);

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
                'user' => $user->only(['google_id', 'display_name', 'email', 'avatar_url']),
                'stamps' => $stamps
            ]);
        }
        catch (ModelNotFoundException $e)
        {
            return response()->json(['success' => false, 'message' => $e], 500);
        }
    }
}
