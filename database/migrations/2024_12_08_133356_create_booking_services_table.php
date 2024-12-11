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
        Schema::create('service_booking', function (Blueprint $table) {
            $table->id(); // Primary key
            $table->foreignId('service_id') // Foreign key for services
            ->constrained('services')
                ->onDelete('cascade'); // Cascade on delete
            $table->foreignId('booking_id') // Foreign key for booking
            ->constrained('booking')
                ->onDelete('cascade'); // Cascade on delete
            $table->timestamps(); // Created_at and updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('booking_services');
    }
};
