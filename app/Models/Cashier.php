<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cashier extends Model
{
    use HasFactory;

    protected $fillable = ['supermarket_food_id', 'token'];

    public function supermarket_food()
    {
        return $this
            ->belongsToMany(
                SupermarketFood::class,
                'cashier_product',
                'cashier_id',
                'supermarket_food_id',
            )
            ->as('cashier_product')
            ->withPivot('amount');
    }
}
