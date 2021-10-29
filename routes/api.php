<?php

use App\Http\Controllers\API\Present\PresentController;
use App\Http\Controllers\API\Present\PresentFormController;
use App\Http\Controllers\API\Question\AnswerController;
use App\Http\Controllers\API\Question\QuestionController;
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

// Twitterの投稿一覧を
Route::get('/posts', [PostController::class, 'posts']);

Route::middleware('auth.client')->group(function () {
    Route::post('/saveTweet', [PostController::class, 'saveTweet']);
    Route::post('/setVisible/{id}', [PostController::class, 'setVisible']);
});

Route::middleware(['auth.token', 'user.create'])->group(function () {

    Route::get('/user', [UserController::class, 'get']);

    Route::get('/question', [QuestionController::class, 'get']);
    Route::post('/answer', [AnswerController::class, 'post']);

    Route::get('/presents', [PresentController::class, 'get']);
});

Route::middleware(['reject'])->group(function () {
    Route::get('/present-form', [PresentFormController::class, 'get']);
    Route::post('/present-form', [PresentFormController::class, 'post']);
});
