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
        Schema::create('admin_profile_photos', function (Blueprint $table) {
            $table->id();
            $table->string('vendor_id')->comment('Merchant ID');
            $table->bigInteger('admin_id')->comment('Trainer ID');
            $table->string('file')->nullable()->comment('file name');
            $table->timestamps();
            $table->softDeletes();
            $table->index(['vendor_id', 'admin_id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists('admin_profile_photos');
    }
};
