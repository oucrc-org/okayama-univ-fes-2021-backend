<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Requests\SaveTweetRequest;
use App\Models\Post;
use Exception;
use Illuminate\Http\JsonResponse;

class PostController extends Controller
{
    function posts(): JsonResponse
    {
        $posts = Post::query()->orderByDesc('created_at')->get();
        return response()->json(['success' => true, 'data' => $posts]);
    }

    function saveTweet(SaveTweetRequest $request): JsonResponse
    {
        try {
            $attributes = $request->only(['id', 'twitter_id', 'avatar_url', 'display_name', 'comment', 'tweet_url']);
            Post::query()->create($attributes);
            return response()->json(['success' => true]);
        } catch (Exception $e) {
            return response()->json(['success' => false, 'error' => $e]);
        }
    }

    function setVisible($id): JsonResponse
    {
        /**
         * @var Post $post
         **/

        $post = Post::query()->findOrFail($id);
        try {
            $post->is_visible = true;
            $post->save();
            return response()->json(['success' => true]);
        } catch (Exception $e) {
            return response()->json(['success' => false, 'error' => $e]);
        }
    }
}
