<?php

namespace App\Http\Controllers;

use App\Http\Requests\Admin\Food\StoreFoodRequest;
use App\Models\Country;
use App\Models\Food;
use App\Models\FoodType;
use Illuminate\Http\Request;

class FoodController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $food = Food::with('country:id,name', 'food_type:id,name,net_pts')->get();
        return view(
            'admin.food.index',
            compact('food')
        );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $countries = Country::all(['id', 'name']);
        $types = FoodType::all(['id', 'name', 'net_pts']);
        return view(
            'admin.food.create',
            compact('countries', 'types')
        );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreFoodRequest $request)
    {
        $food = Food::create($request->validated());
        return response([
            'url' => route('food.edit', $food),
        ], 200);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Food $food)
    {
        return view(
            'admin.food.show',
            compact('food')
        );
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Food $food)
    {
        $countries = Country::all(['id', 'name']);
        $types = FoodType::all(['id', 'name', 'net_pts']);
        return view(
            'admin.food.edit',
            compact('food', 'countries', 'types')
        );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Food $food)
    {
        $food->name = $request->name;
        $food->country_id = $request->country_id;
        $food->type_id = $request->type_id;
        $food->save();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Food $food)
    {
        $food->delete();
    }
}
