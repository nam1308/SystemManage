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
        Schema::create('line_messages', function (Blueprint $table) {
            $table->id();
            $table->string('vendor_id')->comment('Merchant ID')->unique();
            $table->integer('status')->comment('status');
            $table->string('callback')->comment('Callback')->unique();
            $table->integer('channel_id')->nullable()->comment('Login channel ID');
            $table->string('channel_icon')->nullable()->comment('channel icon');
            $table->string('channel_name')->comment('channel name');
            $table->string('channel_description')->nullable()->comment('channel description');
            $table->string('email')->comment('Email');
            $table->string('privacy_policy_url')->nullable()->comment('Privacy Policy URL');
            $table->string('terms_of_use_url')->nullable()->comment('Terms of use URL');
            $table->string('store_url')->comment('Store introduction URL');
            $table->string('channel_secret')->nullable()->comment('login channel secret');
            $table->string('channel_access_token')->nullable()->comment('channel access token');
            $table->string('qr_code')->nullable()->comment('QR code');
            $table->string('line_uri1')->nullable()->comment('line URI');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists('line_messages');
    }
};
