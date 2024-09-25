<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    // Define the table name if it doesn't follow Laravel's naming convention
    protected $table = 'products';

    // Specify which attributes can be mass assigned
    protected $fillable = [
        'product_name',     // Name of the product
        'description',      // Description of the product
        'product_picture',  // Path or URL for the product picture
    ];

    // Define relationships if necessary
    public function orderDetails()
    {
        return $this->hasMany(OrderDetail::class);
    }
}
