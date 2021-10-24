<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePresentUserTable extends Migration
{
    /**
     * プレゼントと応募したユーザーの紐づけを行うテーブル
     *
     * @return void
     */
    public function up()
    {
        Schema::create('present_user', function (Blueprint $table) {
            $table->id();
            $table->foreignId('present_id')
                ->constrained('presents')
                ->onDelete('cascade');

            $table->foreignId('user_id')
                ->unique()
                ->comment('一人に一個まで申し込み可能')
                ->constrained('users')
                ->onDelete('cascade');

            $table->integer('stamps');
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
        Schema::dropIfExists('present_user');
    }
}
