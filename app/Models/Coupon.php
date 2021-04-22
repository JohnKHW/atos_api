<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Coupon extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'points_cost', 'offer_price', 'description', 'available', 'alloted_time'];

    public function users()
    {
        return $this
            ->belongsToMany(User::class, 'user_coupon', 'coupon_id', 'user_id')
            ->withPivot('expires', 'active')
            ->as('supermarket_food');
    }
}
