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
        Schema::create('product_categories', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('price')->comment('plan price');
            $table->integer('trainer_count')->nullable()->comment('Maximum number of trainers');
            $table->string('type')->nullable();
            $table->string('key')->nullable()->comment('Store stripe price_key');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists('product_categories');
    }
};
