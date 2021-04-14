<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Food extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'country_id', 'point_id'];

    public function country()
    {
        return $this->belongsTo(Country::class, 'country_id');
    }

    public function point()
    {
        return $this->belongsTo(Point::class, 'point_id');
    }

    public function supermarkets()
    {
        return $this->belongsToMany(Supermarket::class, 'supermarket_food', 'supermarket_id', 'food_id');
    }
}
