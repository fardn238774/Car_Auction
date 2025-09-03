<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


    //<?php


use Illuminate\Database\Eloquent\Factories\HasFactory;

class Car extends Model
{
    use HasFactory;



    // App\Models\Car.php
protected $fillable = ['name','model','year','mileage','color','auction_location','price_range','image_url'];

}


