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
        Schema::create('invitations', function (Blueprint $table) {
            $table->id();
            $table->string('vendor_id')->comment('Merchant ID');
            $table->string('email')->comment('mail address');
            $table->string('token')->unique()->comment('invite token');
            $table->timestamps();
            $table->softDeletes();

            $table->unique(['vendor_id', 'email']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists('invitations');
    }
};
