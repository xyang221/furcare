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
        Schema::create('deworming_logs', function (Blueprint $table) {
            $table->id();
            $table->timestamp('date')->useCurrent();
            $table->float('weight');
            $table->string('description')->nullable();
            $table->string('administered');
            $table->date('return');
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
        Schema::dropIfExists('deworming_logs');
    }
};
