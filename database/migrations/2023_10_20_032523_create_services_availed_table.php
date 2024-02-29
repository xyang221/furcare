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
            $table->string('unit')->nullable();
            $table->float('unit_price')->nullable();
            $table->timestamp('date')->useCurrent();
            $table->string('status');
            $table->unsignedBigInteger('service_id');
            $table->foreign('service_id')->references('id')->on('services');
            $table->unsignedBigInteger('client_service_id');
            $table->foreign('client_service_id')->references('id')->on('client_service');
            $table->unsignedBigInteger('pet_id');
            $table->foreign('pet_id')->references('id')->on('pets');
            
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
