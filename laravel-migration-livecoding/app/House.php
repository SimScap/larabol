<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class House extends Model
{
    protected $fillable = [
        'address', 'postal_code', 'city', 'region', 'nation', 'square_meters', 'rooms', 'bathrooms', 'description', 'price', 'is_for_sale', 'is_available', 'image'
    ];
}
