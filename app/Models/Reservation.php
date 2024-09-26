<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    use HasFactory;

    // Define the table name if it doesn't follow Laravel's naming convention
    protected $table = 'reservations';

    // Specify which attributes can be mass assigned
    protected $fillable = [
        'order_details_id',  // Foreign key to the OrderDetail model
        'customer_id',       // Foreign key to the Customer model
        'reservation_time',   // Time of the reservation
    ];

    // Define relationships if necessary
    public function orderDetails()
    {
        return $this->belongsTo(OrderDetail::class);
    }

    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }
}
