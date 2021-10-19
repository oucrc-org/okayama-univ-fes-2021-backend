<?php

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

Route::middleware(['auth.token', 'user.create'])->group(function () {
    Route::get('/getProfile', [UserController::class, 'getProfile']);
});
