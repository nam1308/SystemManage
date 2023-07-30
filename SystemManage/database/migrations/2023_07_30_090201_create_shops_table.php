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
        Schema::create('shops', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('vendor_id')->comment('Merchant ID')->index();
            $table->string('name')->comment('shops name');
            $table->string('postal_code')->comment('post code');
            $table->string('prefecture_id')->comment('prefectures');
            $table->string('municipality')->comment('municipalities');
            $table->string('address_building_name')->comment('Address/building name')->nullable();
            $table->string('phone_number')->comment('telephone number')->nullable();
            $table->string('url')->comment('url')->nullable();
            $table->text('contents')->comment('content')->nullable();
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists('shops');
    }
};
