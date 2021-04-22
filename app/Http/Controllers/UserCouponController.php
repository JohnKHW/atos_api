<?php

namespace App\Http\Controllers;

use App\Models\Coupon;
use App\Models\User;
use App\Models\UserCoupon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserCouponController extends Controller
{
    public function index()
    {
        $coupons = Auth::user()
            ->coupons
            ->makeHidden([
                'created_at',
                'updated_at',
                'available',
                'allotted_time',
                'available',
            ]);
        return response([
            'coupons' => $coupons,
        ], 200);
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Coupon  $coupon
     * @return \Illuminate\Http\Response
     */
    public function redeem(Coupon $coupon)
    {
        $user = User::find(Auth::id());
        $cost = $coupon->points_cost;
        if ($user->net_points < $cost) {
            return response([
                'message' => 'Insufficient Net-Points',
            ], 500);
        } else if (!($coupon->available)) {
            return response([
                'message' => 'The coupon is not available',
            ], 500);
        }

        $expires = today()->addDay($coupon->allotted_time);
        $coupon->users()->attach(Auth::id(), ['expires' => $expires]);

        $user->net_points -= $cost;
        $user->save();
        return response([
            'message' => 'Redeem Success',
            'coupon' => $coupon,
        ], 200);
    }


    public function use(UserCoupon $userCoupon)
    {
        if ($userCoupon->active) {
            return response([
                'message' => 'Used coupon',
            ], 500);
        } else if ($userCoupon->expires < today()) {
            return response([
                'message' => 'Expired coupon',
            ], 500);
        }
        $userCoupon->active = true;
        $userCoupon->save();
        return response([
            'message' => 'Coupon use success',
        ], 200);
    }
}
