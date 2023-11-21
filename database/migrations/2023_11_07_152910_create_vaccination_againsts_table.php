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
        Schema::create('vaccination_againsts', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('vaccinationlog_id');
            $table->foreign('vaccinationlog_id')->references('id')->on('vaccination_logs');
            $table->unsignedBigInteger('against_id');
            $table->foreign('against_id')->references('id')->on('againsts');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vaccination_againsts');
    }
};
