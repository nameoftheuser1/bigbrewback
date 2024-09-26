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
        Schema::create('add_ons', function (Blueprint $table) {
            $table->id(); // Primary key, AddOns id
            $table->unsignedBigInteger('price_id'); // Foreign key reference to prices
            $table->string('add_ons_name'); // AddOns name
            $table->string('add_ons_picture'); // AddOns picture URL or file path
            $table->timestamps(); // created_at and updated_at

            // Add foreign key constraint
            $table->foreign('price_id')->references('id')->on('prices')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('add_ons');
    }
};
