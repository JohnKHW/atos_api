<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\Pivot;

class UserCoupon extends Pivot
{
    use HasFactory;
    public $timestamps = false;
    public function user()
    {
        return $this->belongsTo(User::class, 'coupon_id');
    }

    public function coupon()
    {
        return $this->belongsTo(Coupon::class, 'user_id');
    }
}
