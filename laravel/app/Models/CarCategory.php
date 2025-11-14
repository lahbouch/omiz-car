<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class CarCategory extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'daily_rate'
    ];

    public function cars()
    {
        return $this->hasMany(Car::class);
    }
}
