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
        Schema::create('notifications_birthdays', function (Blueprint $table) {
            $table->id();
            $table->string('vendor_id')->comment('Merchant ID')->index();
            $table->string('message', 255)->comment('birthday message')->nullable();
            $table->integer('status')->comment('1 => enabled,null => disabled')->nullable();
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists('notifications_birthdays');
    }
};
