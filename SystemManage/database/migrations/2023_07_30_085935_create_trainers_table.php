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
        Schema::create('trainers', function (Blueprint $table) {
            $table->id();
            $table->string('vendor_id')->comment('Merchant ID')->index();
            $table->string('sei')->comment('surname');
            $table->string('mei')->comment('name');
            $table->string('sei_kana')->comment('Surname');
            $table->string('mei_kana')->comment('May');
            $table->string('email')->unique()->comment('mail address');
            $table->date('birthday')->comment('birthday');
            $table->string('gender_id', 1)->default('1')->comment('Gender ID');
            $table->string('phone_number')->comment('telephone number');
            $table->text('self_introduction')->comment('self-introduction');
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists('trainers');
    }
};
