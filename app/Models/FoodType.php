<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FoodType extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'net_pts'];

    public function food()
    {
        return $this->hasMany(Food::class);
    }
}
