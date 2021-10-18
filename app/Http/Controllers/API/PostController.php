<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\JsonResponse;

class PostController extends Controller
{
    function posts(): JsonResponse
    {
        $posts = Post::query()->orderByDesc('created_at')->get();
        return response()->json(['success' => true, 'data' => $posts]);
    }
}
