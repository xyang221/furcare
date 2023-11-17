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
            $table->timestamp('date');
            $table->string('diagnosis');
            $table->double('body_weight');
            $table->double('heart_rate');
            $table->double('mucous_membranes');
            $table->double('pr_prealbumin');
            $table->double('temperature');
            $table->double('respiration_rate');
            $table->double('caspillar_refill_time');
            $table->double('body_condition_score');
            $table->double('fluid_rate');
            $table->string('comments');
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
