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
        Schema::create('basic_settings', function (Blueprint $table) {
            $table->id();
            $table->string('vendor_id')->comment('Merchant ID')->unique();
            $table->string('company_name', 255)->nullable(true)->comment('Company Name');
            $table->string('store_name', 255)->nullable(true)->comment('Store name');
            $table->string('postal_code', 15)->nullable(true)->comment('post code');
            $table->string('prefecture_id', 2)->nullable(true)->comment('Prefecture ID');
            $table->string('municipality', 255)->nullable(true)->comment('municipalities');
            $table->string('business_hours', 255)->nullable(true)->comment('Address/building name');
            $table->string('address_building_name', 255)->nullable(true)->comment('Address/building name');
            $table->string('phone_number')->comment('telephone number');
            $table->text('other_memo')->comment('Other notes')->nullable();
            $table->text('note_super_admin')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists('basic_settings');
    }
};
