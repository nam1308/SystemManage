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
        Schema::create('applies', function (Blueprint $table) {
            $table->string('id')->comment('Vendor ID')->unique();
            $table->string('company_name')->comment('Company name/store name');
            $table->string('postal_code')->comment('post code');
            $table->string('prefecture_id', 100)->comment('Prefecture ID');
            $table->string('municipality')->comment('municipalities');
            $table->string('address_building_name')->comment('Address/building name');
            $table->string('phone_number')->comment('telephone number');
            $table->string('name')->comment('name');
            $table->string('email')->unique()->comment('mail address');
            $table->string('password')->comment('password');
            $table->string('status')->nullable()->comment('status');
            $table->dateTime('status_updated_at')->nullable()->comment('The date you updated your status');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists('applies');
    }
};
