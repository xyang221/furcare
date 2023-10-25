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
        Schema::table('services_availed', function (Blueprint $table) {
            $table->unsignedBigInteger('petowner_id')->after('service_id');
            $table->foreign('petowner_id')->references('id')->on('petowners');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('services_availed', function (Blueprint $table) {
            Schema::dropIfExists('petowner_id');
        });
    }
};
