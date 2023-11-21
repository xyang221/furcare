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
        Schema::create('client_service', function (Blueprint $table) {
            $table->id();
            $table->timestamp('date');
            $table->double('deposit');
            $table->double('balance')->default(0);
            $table->string('rendered_by');
            $table->unsignedBigInteger('petowner_id');
            $table->foreign('petowner_id')->references('id')->on('petowners');

            $table->softDeletes();
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('client_service');
    }
};
