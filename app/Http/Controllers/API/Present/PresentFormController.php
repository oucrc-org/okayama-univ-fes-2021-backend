<?php

namespace App\Http\Controllers\API\Present;

use App\Http\Controllers\Controller;
use App\Http\Requests\PresentFormRequest;
use App\Models\Present;
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
        /**
         * @var Present $present
         **/
        try {
            $user_id = auth()->id();

            $user = $this->mUser->query()->with('presents')->findOrFail($user_id);

            $user->fill($request->only(['family_name', 'given_name', 'family_name_kana', 'given_name_kana', 'secondary_email', 'tel', 'postal_code', 'address', 'present_id']))->save();

            $stamps = $user->questions()
                ->select('stamp_id')
                ->with('stamp')
                ->get();

            $present = Present::query()->findOrFail($request->input('present_id'));

            if ($stamps->count() < $present->required_stamps)
                return response()->json(['success' => false, 'message' => 'Not enough stamps.'], 400);

            $user->presents()->sync([$request->input('present_id') => ['stamps' => $stamps->count()]]);

            return response()->json(['success' => true]);

        } catch (ModelNotFoundException $e) {
            return response()->json(['success' => false, 'message' => $e], 500);
        }
    }
}
