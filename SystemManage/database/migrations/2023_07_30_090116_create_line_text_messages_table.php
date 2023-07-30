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
        Schema::create('line_text_messages', function (Blueprint $table) {
            $table->id();
            $table->string('vendor_id')->comment('Merchant ID');
            $table->string('user_id', 64)->comment('Line ID');
            $table->string('message')->comment('message');
            $table->timestamps();
            $table->softDeletes();
            $table->index(['vendor_id', 'user_id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists('line_text_messages');
    }
};
