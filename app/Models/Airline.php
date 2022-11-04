<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Airline extends Model
{
    use HasFactory;
    public function city_flights()
    {
        return $this->belongsToMany(city_flight::class);
    }

}
