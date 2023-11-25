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
        Schema::create('services_availed', function (Blueprint $table) {
            $table->id();
            $table->integer('quantity')->default(1);
            $table->integer('unit')->default(1);
            $table->float('unit_price')->nullable();
            $table->timestamp('date_availed_for');
            $table->string('status');
            $table->unsignedBigInteger('service_id');
            $table->foreign('service_id')->references('id')->on('services');
            $table->unsignedBigInteger('client_service_id');
            $table->foreign('client_service_id')->references('id')->on('client_service');
            
            $table->softDeletes();
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('services_availed');
    }
};
