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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('vendor_id')->comment('Merchant ID')->index();
            $table->string('name', 255)->nullable(true)->comment('Product name');
            $table->string('code', 255)->nullable(true)->unique(true)->comment('Product code');
            $table->string('client_ip', 10)->nullable(true)->comment('client IP');
            $table->integer('product_category_id')->nullable(true)->comment('Product category');
            $table->integer('initial_price')->default(0)->nullable(true)->comment('price');
            $table->integer('purchase_count')->nullable(true)->comment('Number of purchases (current)');
            $table->integer('free_term')->nullable(true)->comment('free period');
            $table->dateTime('reference_date')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
};
