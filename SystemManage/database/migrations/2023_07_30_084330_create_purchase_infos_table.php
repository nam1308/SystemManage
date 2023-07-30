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
        Schema::create('purchase_infos', function (Blueprint $table) {
            $table->id();
            $table->string('vendor_id')->comment('Merchant ID')->index();
            $table->integer('purchase_id')->comment('Purchase ID')->index();
            $table->integer('user_id')->comment('Purchaser ID')->index();
            $table->string('product_code')->comment('Product code')->index();
            $table->string('introducer')->nullable(true)->comment('introducer');
            $table->string('question_1')->nullable(true)->comment('Where did you hear about this service?');
            $table->string('question_2')->nullable(true)->comment('What are you interested in?');
            $table->string('other')->nullable(true)->comment('others');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists('purchase_infos');
    }
};
