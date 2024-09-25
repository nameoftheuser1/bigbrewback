<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Delivery extends Model
{
    use HasFactory;

    // Define the table name if it doesn't follow Laravel's naming convention
    protected $table = 'deliveries';

    // Specify which attributes can be mass assigned
    protected $fillable = [
        'order_details_id', // Foreign key to the OrderDetails model
        'customer_id'       // Foreign key to the Customer model
    ];

    // Define relationships
    public function orderDetails()
    {
        return $this->belongsTo(OrderDetail::class, 'order_details_id');
    }

    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }
}
