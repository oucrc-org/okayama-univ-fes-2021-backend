<?php

use App\Http\Controllers\API\Present\PresentController;
use App\Http\Controllers\API\Present\PresentFormController;
use App\Http\Controllers\API\Question\AnswerController;
use App\Http\Controllers\API\Question\QuestionController;
use App\Http\Controllers\API\Twitter\TwitterController;
use App\Http\Controllers\API\UserController;
use App\Http\Controllers\API\PostController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// ツイート一覧を取得
Route::get('/twitter', [TwitterController::class, 'get']);
// プレゼント一覧を取得
Route::get('/presents', [PresentController::class, 'get']);

Route::middleware('auth.client')->group(function () {
    // ツイートを保存する
    Route::post('/saveTweet', [PostController::class, 'saveTweet']);
    // ツイートを承認する
    Route::post('/setVisible/{id}', [PostController::class, 'setVisible']);
});

Route::middleware(['auth.token', 'user.create'])->group(function () {
    // ユーザ情報を取得する
    Route::get('/user', [UserController::class, 'get']);
    // 今日の問題・解答を取得する
    Route::get('/question', [QuestionController::class, 'get']);
    // 今日の問題を回答する
    Route::post('/answer', [AnswerController::class, 'post']);
});

//Route::middleware(['auth.token', 'reject'])->group(function () {

Route::middleware(['auth.token', 'user.create', 'verify.period'])->group(function () {
    // 現在応募している景品を取得する
    Route::get('/present-form', [PresentFormController::class, 'get']);
    // 景品に応募する
    Route::post('/present-form', [PresentFormController::class, 'post']);
});
