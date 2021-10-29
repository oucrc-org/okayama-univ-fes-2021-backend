<?php

namespace App\Http\Controllers\API\Present;

use App\Http\Controllers\Controller;
use App\Http\Requests\PresentFormRequest;
use App\Models\User;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

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

        $user = $this->mUser->query()->with('present')->findOrFail($user_id);

        $present = $user->present->first()->only([
            'id',
            'name',
            'image_path',
            'required_stamps',
            'stock'
        ]);

        return response()->json(['success' => true, 'data' => $present]);
    }

    public function post(PresentFormRequest $request): JsonResponse
    {
//        [$name, $address, $present_id] = $request->only(['name', 'address', 'present_id']);

        return response()->json(['success' => true, 'data' => $request->all()]);
    }
}
