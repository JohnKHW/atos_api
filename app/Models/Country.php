<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User;

class Country extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'flag_path', 'region_id'];
    /**
     * $country = Country::find($id);
     * for($country->users as user){ user->username }
     */

    public function region()
    {
        return $this->belongsTo(Region::class, 'region_id');
    }

    public function users()
    {
        return $this->hasMany(User::class);
    }
}
