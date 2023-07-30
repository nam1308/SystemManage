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
        Schema::create('line_rich_menus', function (Blueprint $table) {
            $table->string('id')->comment('Rich menu ID')->unique();
            $table->string('vendor_id')->comment('Merchant ID');
            $table->string('user_id', 64)->comment('Line ID');
            $table->timestamps();
            $table->softDeletes();
            $table->index(['vendor_id', 'user_id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists('line_rich_menus');
    }
};
