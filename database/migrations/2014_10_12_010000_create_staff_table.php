<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::dropIfExists('staffs');
        Schema::create('staffs', function (Blueprint $table) {
            $table->id();
            $table->string('firstname');
            $table->string('lastname');
            $table->integer('contact_num');
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('address_id');
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users');
        $table->foreign('address_id')->references('id')->on('addresses');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('staff');
    }
};
