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
        Schema::create('reservations', function (Blueprint $table) {
            $table->id();
            $table->string('firstname');
            $table->string('lastname');
            $table->date('start_date');
            $table->date('end_date');
            $table->text('notes')->nullable();
            $table->unsignedBigInteger('car_id')->nullable();
            $table->string('car_name')->nullable();
            $table->string('status')->default('pending');
            $table->timestamps();

            // Add foreign key constraint if car_id is provided
            $table->foreign('car_id')->references('id')->on('cars')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reservations');
    }
};
