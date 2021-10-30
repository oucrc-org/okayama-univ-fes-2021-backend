<?php

namespace App\Http\Controllers\API\Present;

use App\Http\Controllers\Controller;
use App\Http\Requests\PresentFormRequest;
use App\Models\User;
use Illuminate\Database\Eloquent\ModelNotFoundException;
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
        try {
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
        } catch (ModelNotFoundException $e) {
            return response()->json(['success' => false, 'message' => $e], 500);
        }
    }

    public function post(PresentFormRequest $request): JsonResponse
    {
        try {
            $user_id = auth()->id();

            $user = $this->mUser->query()->with('presents')->findOrFail($user_id);

            $user->fill($request->all())->save();

            $stamps = $user->questions()
                ->select('stamp_id')
                ->with('stamp')
                ->get();

            $user->presents()->sync([$request->input('present_id') => ['stamps' => $stamps->count()]]);

            return response()->json(['success' => true]);

        } catch (ModelNotFoundException $e) {
            return response()->json(['success' => false, 'message' => $e], 500);
        }
    }
}
