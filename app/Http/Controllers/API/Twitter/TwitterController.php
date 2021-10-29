<?php

namespace App\Http\Controllers\API\Twitter;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\JsonResponse;

class TwitterController extends Controller
{
    private $mPost;

    function __construct(Post $post)
    {
        $this->mPost = $post;
    }

    public function get(): JsonResponse
    {
        $posts = $this->mPost->query()
            ->where('is_visible', true)
            ->get(['twitter_id', 'avatar_url', 'display_name', 'comment', 'tweet_url']);

        return response()->json(['success' => 'true', 'data' => $posts]);
    }
}