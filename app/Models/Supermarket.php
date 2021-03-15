<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Country;
use App\Models\Food;

class Supermarket extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'location', 'country_id'];

    public function country()
    {
        return $this->belongsTo(Country::class, 'country_id');
    }

    public function food()
    {
        return $this
            ->belongsToMany(
                Food::class,
                'supermarket_food',
                'supermarket_id',
                'food_id'
            )
            ->withPivot(['id'])
            ->as('supermarket_food');
    }
}
