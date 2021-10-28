<?php

namespace App\Http\Controllers\API\Present;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\JsonResponse;

class PresentFormController extends Controller
{
    private $mUser;

    function __construct(User $user)
    {
        $this->mUser = $user;
    }

    public function get(): JsonResponse
    {
        $user_id = auth()->id();

        $user = $this->mUser->query()->with('presents')->findOrFail($user_id);

        if ($user->presents->first())
            $present = $user->presents->first()->only([
                'id',
                'name',
                'image_path',
                'required_stamps',
                'stock'
            ]);
        else $present = null;

        return response()->json(['success' => true, 'data' => $present]);
    }

    public function post()
    {

    }
}
