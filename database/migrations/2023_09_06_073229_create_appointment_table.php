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
        Schema::create('appointment', function (Blueprint $table) {
            $table->id();
            $table->timestamp('date');
            $table->string('purpose');
            $table->string('status');
            $table->string('remarks')->nullable();
            $table->unsignedBigInteger('petowner_id');
            $table->unsignedBigInteger('service_id');

            $table->foreign('petowner_id')->references('id')->on('petowners');
            $table->foreign('service_id')->references('id')->on('services');
        
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('appointment');
    }
};
