<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->string('id')->primary();
            $table->string('twitter_id')->comment('TwitterのID（@を除く）');
            $table->string('avatar_url')->comment('TwitterアイコンのURL');
            $table->string('display_name')->comment('Twitterでの表示名');
            $table->string('comment')->comment('ツイート本文');
            $table->string('tweet_url')->comment('ツイートのURL');
            $table->boolean('is_visible')->default(false)->comment('フロントエンドで表示させるかどうか');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('posts');
    }
}
