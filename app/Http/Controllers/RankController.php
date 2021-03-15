<?php

namespace App\Http\Controllers;

use App\Models\Country;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class RankController extends Controller
{
    public function usersAll()
    {
        $users = User::with('country:id,name')
            ->orderBy('net_points', 'desc')
            ->get(['name', 'net_points', 'country_id']);
        return $users;
    }

    public function usersCountry()
    {
        $users = User::with('country:id,name')
            ->where('country_id', Auth::user()->country_id)
            ->orderBy('net_points', 'desc')
            ->get(['name', 'net_points', 'country_id']);
        return $users;
    }

    public function countriesAll()
    {
        /* $users = User::with('country:id,name')
            ->where('country_id', Auth::user()->country_id)
            ->orderBy('net_points', 'desc')
            ->get(['name', 'net_points', 'country_id']);
        return $users; */
        $countries = Country::all();
        foreach ($countries as $country) {
            $country->mark = $country->users->sum('net_points');
        }
        return $countries;
    }
}
