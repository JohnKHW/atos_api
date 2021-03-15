<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\Pivot;

class SupermarketFood extends Pivot
{

    public function food()
    {
        return $this->belongsTo(Food::class, 'food_id');
        //->with('country', 'food_type');
    }

    public function supermarket()
    {
        return $this->belongsTo(Supermarket::class, 'supermarket_id');
    }
}
