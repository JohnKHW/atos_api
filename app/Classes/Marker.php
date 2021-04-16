<?php

namespace App\Classes;

use App\Models\Point;
use Illuminate\Support\Facades\Auth;

class Marker
{
    public static function getCashierMark($cashier)
    {
        $marks = 0;
        foreach ($cashier->supermarket_food as $product) {
            $food = $product->food;
            $amount = $product->cashier_product->amount;
            $marks += self::getFoodMark($food) * $amount;
        }
        return $marks;
    }

    public static function getFoodMark($food)
    {
        return $food->score + self::getCountryMark($food->country) + self::getPointMark($food->point);
    }
    //Getting the type of the Food Type
    public static function getPointMark($point)
    {
        return $point->mark;
    }

    public static function getCountryMark($country)
    {
        $user_country = Auth::user()->country;
        //The current marks are hard code
        if ($user_country->id == $country->id) {
            // Same country
            return Point::find(2)->mark;
        } else if ($user_country->region->id == $country->region->id) {
            // Same Region
            return Point::find(1)->mark;
        }
        return 0;
    }
}
