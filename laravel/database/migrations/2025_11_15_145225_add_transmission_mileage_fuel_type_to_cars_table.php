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
        Schema::table('cars', function (Blueprint $table) {
            $table->string('transmission')->default('Auto'); // Auto or Manual
            $table->string('mileage')->default('10 KM'); // Kilométrage
            $table->string('fuel_type')->default('Petrol'); // Petrol or Diesel
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('cars', function (Blueprint $table) {
            $table->dropColumn(['transmission', 'mileage', 'fuel_type']);
        });
    }
};
