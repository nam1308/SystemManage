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
        Schema::create('tax_rate_settings', function (Blueprint $table) {
            $table->id();
            $table->integer('vendor_id')->comment('Merchant ID')->unique();
            $table->double('tax')->nullable(true)->comment('tax rate');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists('tax_rate_settings');
    }
};
