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
        Schema::create('vaccination_logs', function (Blueprint $table) {
            $table->id();
            $table->timestamp('date');
            $table->integer('weight');
            $table->string('description');
            $table->string('administered');
            $table->string('status');

            $table->unsignedBigInteger('pet_id');
            $table->foreign('pet_id')->references('id')->on('pets');
            $table->unsignedBigInteger('services_availed_id');
            $table->foreign('services_availed_id')->references('id')->on('services_availed');
            
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vaccination_logs');
    }
};
