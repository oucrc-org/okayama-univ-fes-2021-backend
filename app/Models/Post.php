<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Carbon;

/**
 * Class Post
 *
 * @property string $id
 * @property string $twitter_id
 * @property string $avatar_url
 * @property string $display_name
 * @property string $comment
 * @property string $tweet_url
 * @property boolean $is_visible
 * @property Carbon $created_at
 * @property Carbon $updated_at
 * @property Carbon $deleted_at
 */
class Post extends Model
{
    use SoftDeletes;

    protected $dates = ['deleted_at'];

    protected $fillable = [
        'id',
        'twitter_id',
        'avatar_url',
        'display_name',
        'comment',
        'tweet_url',
        'is_visible'
    ];

    protected $hidden = [
        'deleted_at'
    ];
}
