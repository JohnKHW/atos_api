<?php

namespace App\Classes;

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
        return self::getCountryMark($food->country) + self::getFoodTypeMark($food->food_type);
    }

    public static function getFoodTypeMark($foodType)
    {
        return $foodType->net_pts;
    }

    public static function getCountryMark($country)
    {
        $user_country = Auth::user()->country;
        //The current marks are hard code
        if ($user_country->id == $country->id) {
            // Same country
            return 2;
        } else if ($user_country->region->id == $country->region->id) {
            // Same Region
            return 1;
        }
        return 0;
    }
}
