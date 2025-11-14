<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Car extends Model
{
    use HasFactory;

    protected $fillable = [
        'make',
        'model',
        'registration_number',
        'year',
        'color',
        'category_id',
        'available',
        'features',
        'daily_rate',
        'image_path'
    ];

    public function category()
    {
        return $this->belongsTo(CarCategory::class);
    }

    public function bookings()
    {
        return $this->hasMany(Booking::class);
    }
}
