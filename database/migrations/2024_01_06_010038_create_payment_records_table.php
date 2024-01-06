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
        Schema::create('payment_records', function (Blueprint $table) {
            $table->id();
            $table->string('type');
            $table->string('ref_no')->nullable();
            $table->float('total');
            $table->float('amount');
            $table->float('change');
            $table->unsignedBigInteger('client_deposit_id');
            $table->foreign('client_deposit_id')->references('id')->on('client_deposits');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('payment_records');
    }
};
