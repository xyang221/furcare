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
            $table->unsignedBigInteger('medicine_id')->nullable()->after('services_availed_id');
            $table->foreign('medicine_id')->references('id')->on('medicines')->nullable();
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
