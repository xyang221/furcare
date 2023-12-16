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
        Schema::create('pets', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->date('birthdate');
            $table->string('gender');
            $table->string('color');
            $table->string('photo')->nullable();            
            $table->unsignedBigInteger('breed_id');
            $table->unsignedBigInteger('petowner_id');
            $table->timestamps();

            $table->foreign('breed_id')->references('id')->on('breeds');
            $table->foreign('petowner_id')->references('id')->on('petowners')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pets');
    }
};
