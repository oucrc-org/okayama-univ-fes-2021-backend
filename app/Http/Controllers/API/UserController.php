<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Question;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{

    private $mUser;
    private $mQuestion;

    function __construct(User $user, Question $question)
    {
        $this->mUser = $user;
        $this->mQuestion = $question;
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

            //本日の質問
            $target_question_id = $this->mQuestion->targetQuestion(Carbon::now())->id;

            //既に正解しているかどうか
            $answer_today_question = $user->questions
                ->where('id', $target_question_id)
                ->isNotEmpty();

            return response()->json([
                'success' => true,
                'user' => $user->only(['google_id', 'display_name', 'email', 'avatar_url']),
                'stamps' => $stamps,
                'answer_today_question' => $answer_today_question
            ]);
        }
        catch (ModelNotFoundException $e)
        {
            return response()->json(['success' => false, 'message' => $e], 500);
        }
    }
}
