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
        Schema::table('medication', function (Blueprint $table) {
            $table->unsignedBigInteger('med_id')->nullable()->after('treatment_id');
            $table->foreign('med_id')->references('id')->on('medicines');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('medication', function (Blueprint $table) {
            //
        });
    }
};
