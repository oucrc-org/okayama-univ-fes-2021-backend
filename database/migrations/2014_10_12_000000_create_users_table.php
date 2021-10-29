<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('google_id')->unique();
            $table->string('display_name');
            $table->string('email')->unique();
            $table->boolean('email_verified');
            $table->string('avatar_url');

            $table->string('family_name')->nullable();
            $table->string('given_name')->nullable();
            $table->string('family_name_kana')->nullable();
            $table->string('given_name_kana')->nullable();
            $table->string('secondary_email')->nullable();
            $table->string('tel')->nullable();
            $table->string('postal_code')->nullable();
            $table->string('address')->nullable();

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
        Schema::dropIfExists('users');
    }
}
