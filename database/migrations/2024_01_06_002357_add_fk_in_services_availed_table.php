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
            $table->unsignedBigInteger('client_deposit_id')->nullable()->after('service_id');
            $table->foreign('client_deposit_id')->references('id')->on('client_deposits')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('services_availed', function (Blueprint $table) {
            //
        });
    }
};
