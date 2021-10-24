<?php

namespace App\Http\Controllers\API\Question;

use App\Http\Controllers\Controller;
use App\Http\Requests\AnswerRequest;
use App\Models\Question;
use Carbon\Carbon;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Auth;

class AnswerController extends Controller
{
    private $mQuestion;

    function __construct(Question $question)
    {
        $this->mQuestion = $question;
    }
    public function post(AnswerRequest $request): JsonResponse
    {

        //日付を取得
        $today = Carbon::now();

        //該当の問題を取得
        $question = $this->mQuestion->targetQuestion($today);

        //問題の正しい解答を取得
        $answers = $question->answers
            ->where('is_correct', true)
            ->pluck('id')
            ->toArray();

        //指定された問題が本日の問題と同じでかつ
        //答えが正しければ
        if(
            $request->input('question_id') == $question->id &&
            in_array($request->input('answer_id'), $answers)
        ){

            return response()->json(['success' => true]);
        }

        return response()->json(['success' => false]);
    }
}
