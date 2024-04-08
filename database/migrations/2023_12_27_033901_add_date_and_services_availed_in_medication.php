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
            $table->unsignedBigInteger('services_availed_id');
            $table->foreign('services_availed_id')->references('id')->on('services_availed');
            $table->timestamp('date')->useCurrent()->after('services_availed_id');
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
