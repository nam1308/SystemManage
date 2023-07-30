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
        Schema::create('admins', function (Blueprint $table) {
            $table->id();
            $table->string('vendor_id')->comment('Merchant ID')->index();
            $table->string('login_id')->unique()->comment('Login ID');
            $table->string('name')->comment('name');
            $table->string('email')->comment('mail address');
            $table->string('password')->comment('password');
            $table->tinyInteger('role')->default(0)->index('index_role')->comment('roll');
            $table->tinyInteger('traniner_role')->nullable()->comment('trainer');
            $table->boolean('block')->default(false);
            $table->text('self_introduction')->comment('self-introduction')->nullable()->default(null);
            $table->timestamps();
            $table->softDeletes();
            $table->rememberToken();

            // Primary key setting
            $table->unique(['vendor_id', 'email']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists('admins');
    }
};
