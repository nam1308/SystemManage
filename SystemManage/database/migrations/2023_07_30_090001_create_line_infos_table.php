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
        Schema::create('line_infos', function (Blueprint $table) {
            $table->id();
            $table->string('vendor_id')->comment('Merchant ID')->index();
            $table->string('callback')->comment('Callback');
            $table->string('login_channel_id')->comment('Login channel ID');
            $table->string('login_channel_secret')->comment('login channel secret');
            $table->string('message_channel_id')->comment('Message channel ID');
            $table->string('message_channel_secret')->comment('message channel secret');
            $table->string('message_channel_access_token')->comment('message channel access token');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists('line_infos');
    }
};
