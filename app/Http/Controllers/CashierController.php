<?php

namespace App\Http\Controllers;

use App\Classes\Marker;
use App\Http\Requests\Cashier\StoreCashierRequest;
use App\Models\Cashier;
use App\Models\Supermarket;
use App\Models\SupermarketFood;
use App\Models\User;
use Faker\Provider\Uuid;
use Illuminate\Database\Eloquent\Relations\MorphTo;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

class CashierController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $supermarkets = Supermarket::all();
        return view(
            'cashiers.index',
            compact('supermarkets')
        );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCashierRequest $request)
    {
        $cashier = Cashier::create();
        $cashier->token = Uuid::uuid();
        $cashier->save();
        $cashier->supermarket_food()->attach($request->food);

        $response = [
            "qrcode" => (string)QrCode::size(300)
                ->errorCorrection('H')
                ->backgroundColor(25, 227, 7)
                ->color(11, 115, 88)
                ->style('round')
                ->generate($cashier->token),
        ];
        return response($response, 200);
    }

    public function cal_mark($uuid)
    {
        $cashier = Cashier::where([
            ['token', $uuid],
            ['active', false]
        ])->first();
        if ($cashier == null) {
            return response([
                'message' => 'Invalid QrCode',
            ], 404);
        }

        $cashier->active = true;
        $cashier->save();

        $mark = Marker::getCashierMark($cashier);
        $user = User::find(Auth::id());
        $user->net_points += $mark;
        $user->save();

        return response([
            'message' => 'Success',
            'score' => $mark,
        ], 200);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Cashier  $cashier
     * @return \Illuminate\Http\Response
     */
    public function show(Cashier $cashier)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Cashier  $cashier
     * @return \Illuminate\Http\Response
     */
    public function edit(Cashier $cashier)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Cashier  $cashier
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Cashier $cashier)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Cashier  $cashier
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cashier $cashier)
    {
        //
    }
}
