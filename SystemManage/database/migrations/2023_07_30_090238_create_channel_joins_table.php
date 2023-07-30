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
        Schema::create('channel_joins', function (Blueprint $table) {
            $table->id();
            $table->string('vendor_id')->comment('Merchant ID');
            $table->string('user_id')->comment('Member ID');
            $table->timestamps();
            $table->softDeletes();
            $table->unique(['vendor_id', 'user_id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists('channel_joins');
    }
};
