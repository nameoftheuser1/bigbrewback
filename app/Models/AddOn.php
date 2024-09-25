<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AddOn extends Model
{
    use HasFactory;

    // Define the table name if it doesn't follow Laravel's naming convention
    protected $table = 'add_ons';

    // Specify which attributes can be mass assigned
    protected $fillable = [
        'price_id',       // Foreign key to the Price model
        'add_ons_name',   // Name of the add-on
        'add_ons_picture' // Path or URL for the add-on picture
    ];

    // Define relationships
    public function price()
    {
        return $this->belongsTo(Price::class);
    }
}
