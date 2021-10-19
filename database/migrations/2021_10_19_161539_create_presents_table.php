<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePresentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('presents', function (Blueprint $table) {
            $table->id();
            $table->string('name')->comment('プレゼント名');
            $table->string('image_path')->comment('プレゼントの画像');
            $table->integer('required_stamps')->comment('必要なスタンプ数');
            $table->integer('stock')->comment('プレゼントの数');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('presents');
    }
}
