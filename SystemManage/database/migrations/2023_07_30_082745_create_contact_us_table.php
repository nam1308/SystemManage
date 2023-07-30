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
        Schema::create('contact_us', function (Blueprint $table) {
            $table->id();
            $table->string('vendor_id')->comment('Merchant ID')->index();
            $table->bigInteger('user_id')->index('user_id')->comment('Member ID');
            $table->text('content')->comment('Contents of question');
            $table->string('agent')->comment('Agent');
            $table->string('ip',20)->comment('IP address');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists('contact_us');
    }
};
