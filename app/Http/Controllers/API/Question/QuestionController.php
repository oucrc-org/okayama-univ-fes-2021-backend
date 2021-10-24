<?php

namespace App\Http\Controllers\API\Question;

use App\Http\Controllers\Controller;
use App\Models\Question;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\JsonResponse;

class QuestionController extends Controller
{
    private $mQuestion;

    function __construct(Question $question)
    {
        $this->mQuestion = $question;
    }


    public function get(): JsonResponse
    {
        try {

            //日付の取得
            $today = Carbon::now();

            //該当の問題を取得
            $question = $this->mQuestion
                ->targetQuestion($today);

            //問題に対する解答を取得
            $answers = $question->answers
                ->map(function ($item){
                    return $item->only(['id', 'contents']);
                })
                ->toArray();

            //返すJsonを作成
            $data = array_merge($question->only(['id', 'quiz']), ['answers' => $answers]);

            return response()->json([
                'success' => true,
                'data' => $data
            ]);

        }
        catch (ModelNotFoundException $e)
        {
            return response()->json(['success' => false, 'message' => $e]);
        }
    }
}
