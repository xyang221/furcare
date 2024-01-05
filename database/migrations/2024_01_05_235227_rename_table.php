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
        Schema::rename('client_service', 'client_deposits');
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::rename('client_service', 'client_deposits');
    }
};
