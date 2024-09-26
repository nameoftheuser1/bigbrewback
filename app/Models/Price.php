<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Price extends Model
{
    use HasFactory;

    // Define the table name if it doesn't follow Laravel's naming convention
    protected $table = 'prices';

    // Specify which attributes can be mass assigned
    protected $fillable = [
        'price_name', // Name of the price
    ];

    // Define relationships if necessary
    public function orderDetails()
    {
        return $this->hasMany(OrderDetail::class);
    }
}
