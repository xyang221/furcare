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
        Schema::create('pet_condition', function (Blueprint $table) {
            $table->id();
            $table->timestamp('date');
            $table->string('eating');
            $table->string('drinking');
            $table->string('urinated');
            $table->string('vomit');
            $table->string('deficated');
            $table->string('is_AM_or_PM');
            $table->string('remarks');

            $table->unsignedBigInteger('treatment_id');
            $table->foreign('treatment_id')->references('id')->on('treatment');
            
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pet_condition');
    }
};
