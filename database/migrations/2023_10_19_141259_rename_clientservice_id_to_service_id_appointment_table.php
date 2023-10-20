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
        Schema::table('appointment', function (Blueprint $table) {
            $table->dropForeign(['client_service_id']);
            $table->dropColumn('client_service_id');

           
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('appointment', function (Blueprint $table) {
            Schema::dropIfExists('client_service_id');
        });
    }
};
