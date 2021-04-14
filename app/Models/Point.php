<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Point extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'description', 'mark', 'selectable'];

    public function food()
    {
        return $this->hasMany(Food::class);
    }
}
