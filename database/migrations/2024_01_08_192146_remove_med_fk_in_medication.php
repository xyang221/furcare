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
            $table->dropForeign(['medicine_id']);
            $table->dropColumn('medicine_id');
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