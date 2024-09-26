<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderDetail extends Model
{
    use HasFactory;

    // Define the table name if it doesn't follow Laravel's naming convention
    protected $table = 'order_details';

    // Specify which attributes can be mass assigned
    protected $fillable = [
        'product_id',        // Foreign key to the Product model
        'customer_id',       // Foreign key to the Customer model
        'add_ons_id',        // Foreign key to the AddOn model
        'price_id',          // Foreign key to the Price model
        'sugar_level',       // Sugar level preference
        'quantity',          // Quantity of the order
        'status',            // Status of the order
        'total_amount',      // Total amount of the order
    ];

    // Define relationships
    public function product()
    {
        return $this->belongsTo(Product::class);
    }

    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }

    public function addOn()
    {
        return $this->belongsTo(AddOn::class);
    }

    public function price()
    {
        return $this->belongsTo(Price::class);
    }
}
