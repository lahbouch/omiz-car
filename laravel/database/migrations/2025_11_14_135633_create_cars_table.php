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
        Schema::create('cars', function (Blueprint $table) {
            $table->id();
            $table->string('make'); // Marque (e.g., Renault, Peugeot)
            $table->string('model'); // Modèle (e.g., Clio, 208)
            $table->string('registration_number')->unique(); // Numéro d'immatriculation
            $table->year('year'); // Année de fabrication
            $table->string('color');
            $table->unsignedBigInteger('category_id');
            $table->boolean('available')->default(true);
            $table->text('features')->nullable(); // Caractéristiques (climatisation, GPS, etc.)
            $table->decimal('daily_rate', 8, 2); // Tarif journalier
            $table->string('image_path')->nullable(); // Chemin de l'image du véhicule
            $table->timestamps();

            $table->foreign('category_id')->references('id')->on('car_categories');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cars');
    }
};
