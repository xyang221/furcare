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
            $table->double('heart_rate')->nullable();
            $table->double('mucous_membranes')->nullable();
            $table->double('pr_prealbumin')->nullable();
            $table->double('temperature')->nullable();
            $table->double('respiration_rate')->nullable();
            $table->double('caspillar_refill_time')->nullable();
            $table->double('body_condition_score')->nullable();
            $table->double('fluid_rate')->nullable();
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
