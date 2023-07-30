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
        Schema::create('reservations', function (Blueprint $table) {
            $table->string('id', 64)->comment('Reservation ID')->unique();
            $table->string('vendor_id')->comment('Merchant ID')->index();
            $table->string('user_id', 64)->comment('Reservation person')->nullable();
            $table->string('admin_id', 64)->comment('trainer');
            $table->integer('status')->default(10)->comment('10=>tentative reservation, 20=>rejected, 30=>confirmed');
            $table->integer('category')->default(10)->comment('10=>LINE, 20=>WEB');
            $table->integer('course_id')->comment('menu ID')->nullable();
            $table->integer('shop_id')->comment('Store ID')->nullable();
            $table->dateTime('reservation_start')->comment('Reservation start');
            $table->dateTime('reservation_end')->comment('End of reservation');
            $table->text('note')->comment('memo')->nullable();
            $table->softDeletes()->index();
            $table->timestamps();
            $table->index(['reservation_start', 'reservation_end']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists('reservations');
    }
};
