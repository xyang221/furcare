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
        Schema::table('vaccination_logs', function (Blueprint $table) {
            $table->dropColumn('administered');
            $table->unsignedBigInteger('vet_id')->after('pet_id');
            $table->foreign('vet_id')->references('id')->on('veterinarians');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('vaccination_logs', function (Blueprint $table) {
            //
        });
    }
};
