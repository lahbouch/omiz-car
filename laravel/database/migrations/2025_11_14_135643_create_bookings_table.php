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
        Schema::create('bookings', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('customer_id');
            $table->unsignedBigInteger('car_id');
            $table->dateTime('pickup_date');
            $table->dateTime('return_date');
            $table->string('pickup_location'); // Lieu de prise en charge
            $table->string('return_location'); // Lieu de retour
            $table->decimal('total_amount', 10, 2); // Montant total
            $table->string('status')->default('pending'); // Statut de la réservation
            $table->text('special_requests')->nullable(); // Demandes spéciales
            $table->boolean('insurance_included')->default(false); // Assurance incluse
            $table->timestamps();

            $table->foreign('customer_id')->references('id')->on('customers');
            $table->foreign('car_id')->references('id')->on('cars');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bookings');
    }
};
