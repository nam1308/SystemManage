<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->string('id', 64)->primary()->comment('Line ID')->nullable();
            $table->string('display_name')->comment('Display name of the line')->nullable();
            $table->string('name')->comment('name')->nullable();
            $table->string('name_kana')->comment('Name (katanaka)')->nullable();
            $table->string('picture_url')->comment('line profile picture')->nullable();
            $table->string('phone_number')->comment('telephone number')->nullable();
            $table->string('email')->unique()->comment('mail address')->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password')->comment('password')->nullable();
            $table->date('birthday')->comment('birthday')->nullable();
            $table->string('birthday_search')->comment('birthday')->nullable();
            $table->string('gender_id', 1)->comment('Gender ID')->nullable();
            $table->timestamps();
            $table->rememberToken();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
};
