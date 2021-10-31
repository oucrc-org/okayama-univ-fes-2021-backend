<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Question;
use App\Models\Stamp;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{

    private $mUser;
    private $mQuestion;
    private $mStamp;

    function __construct(User $user, Question $question, Stamp $stamp)
    {
        $this->mUser = $user;
        $this->mQuestion = $question;
        $this->mStamp = $stamp;
    }

    function get(): JsonResponse
    {
        try
        {
            //ユーザー情報
            $user_id = auth()->id();

            $user = $this->mUser->query()
                ->findOrFail($user_id);

            $stamps = $this->mStamp->query()->get();

            /** @noinspection PhpPossiblePolymorphicInvocationInspection */
            //スタンプ情報
            $user_stamps = $user->questions()
                ->select('stamp_id')
                ->with('stamp')
                ->get()->map(function ($item){
                    return $item->stamp->only(['id', 'name','image_path']);
                });

            foreach ($stamps as $stamp)
            {
                $has_stamp = false;
                foreach ($user_stamps as $user_stamp)
                {
                    if($stamp->id == $user_stamp['id']){
                        $has_stamp = true;
                        $stamp['has_stamp'] = true;
                    }
                }
                if(!$has_stamp) $stamp['has_stamp'] = false;
            }

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
