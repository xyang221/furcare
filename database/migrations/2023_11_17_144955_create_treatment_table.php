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
        Schema::create('treatment', function (Blueprint $table) {
            $table->id();
            $table->timestamp('date')->useCurrent();
            $table->string('diagnosis');
            $table->double('body_weight');
            $table->string('heart_rate')->nullable();
            $table->string('mucous_membranes')->nullable();
            $table->string('pr_prealbumin')->nullable();
            $table->string('temperature')->nullable();
            $table->string('respiration_rate')->nullable();
            $table->string('caspillar_refill_time')->nullable();
            $table->string('body_condition_score')->nullable();
            $table->string('fluid_rate')->nullable();
            $table->string('comments')->nullable();

            $table->unsignedBigInteger('services_availed_id');
            $table->foreign('services_availed_id')->references('id')->on('services_availed');
            
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('treatment');
    }
};
