<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Vehicle extends Model
{
    //BAGO
    // use HasFactory;

    protected $fillable = ['name', 'type', 'seats', 'price', 'is_available'];
}
