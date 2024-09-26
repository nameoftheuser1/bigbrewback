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
            $table->id(); // Primary key, Reservation id
            $table->unsignedBigInteger('order_details_id'); // Foreign key to order_details table
            $table->unsignedBigInteger('customer_id'); // Foreign key to customers table
            $table->dateTime('reservation_time'); // Field for reservation time
            $table->timestamps(); // created_at and updated_at

            // Add foreign key constraints
            $table->foreign('order_details_id')->references('id')->on('order_details')->onDelete('cascade');
            $table->foreign('customer_id')->references('id')->on('customers')->onDelete('cascade');
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
