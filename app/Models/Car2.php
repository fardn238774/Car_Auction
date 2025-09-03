<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car2 extends Model
{
    use HasFactory;

    // Specify the table name
    protected $table = 'car2';

    // Fillable fields (so you can use Car2::create([...]))
    protected $fillable = [
        'car_name',
        'car_image',
        'car_specs',
        'price',
    ];

    // Optional: if you want timestamps (created_at, updated_at)
    public $timestamps = true;
}
