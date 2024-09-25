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
        Schema::create('order_details', function (Blueprint $table) {
            $table->id(); // Primary key, OrderDetails id
            $table->unsignedBigInteger('product_id'); // Foreign key to products table
            $table->unsignedBigInteger('customer_id'); // Foreign key to customers table
            $table->unsignedBigInteger('add_ons_id')->nullable(); // Foreign key to add_ons table (nullable)
            $table->unsignedBigInteger('price_id'); // Foreign key to prices table
            $table->string('sugar_level'); // String to store sugar level preference
            $table->integer('quantity'); // Integer for the quantity of the order
            $table->string('status'); // String for status of the order (e.g., pending, completed)
            $table->decimal('total_amount', 8, 2); // Decimal for the total amount
            $table->timestamps(); // created_at and updated_at

            // Add foreign key constraints
            $table->foreign('product_id')->references('id')->on('products')->onDelete('cascade');
            $table->foreign('customer_id')->references('id')->on('customers')->onDelete('cascade');
            $table->foreign('add_ons_id')->references('id')->on('add_ons')->onDelete('set null');
            $table->foreign('price_id')->references('id')->on('prices')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('order_details');
    }
};
