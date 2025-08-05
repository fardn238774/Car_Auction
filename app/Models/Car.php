<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


    //<?php


use Illuminate\Database\Eloquent\Factories\HasFactory;

class Car extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'model',
        'year',
        'mileage',
        'color',
        'auction_place',
        'price_range',
    ];
}


