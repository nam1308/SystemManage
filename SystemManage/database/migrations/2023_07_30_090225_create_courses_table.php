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
        Schema::create('courses', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('vendor_id')->comment('Merchant ID')->index();
            $table->string('name')->comment('menu name')->nullable();
            $table->integer('price')->comment('one time price')->nullable();
            $table->integer('time')->comment('total booking time')->nullable();
            $table->integer('course_time')->comment('time')->nullable();
            $table->integer('course_minutes')->comment('point')->nullable();
            $table->text('contents')->comment('Menu explanation')->nullable();
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists('courses');
    }
};
