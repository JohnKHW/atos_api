<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Supermarket;
use App\Models\Country;

use App\Http\Requests\Admin\Supermarket\StoreSupermarketRequest;
use App\Models\Food;

class SupermarketController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // get all supermarkets
        $supermarkets = Supermarket::with('country:id,name')->paginate(10);
        return view(
            'admin.supermarkets.index',
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
        $countries = Country::all(['id', 'name']);
        $foodlist = Food::all(['id', 'name']);
        return view(
            'admin.supermarkets.create',
            compact('countries', 'foodlist')
        );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreSupermarketRequest $request)
    {
        $supermarket = Supermarket::create($request->validated());
        $supermarket->food()->sync($request->food);
        return response([
            'url' => route('supermarkets.edit', $supermarket),
        ], 200);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Supermarket $supermarket)
    {
        $supermarket->makeHidden(['created_at', 'updated_at', 'country_id']);
        $supermarket->food->makeHidden(['created_at', 'updated_at', 'country_id', 'score', 'point_id']);
        $response = $supermarket;
        return response($response, 200);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Supermarket $supermarket)
    {
        $countries = Country::all(['id', 'name']);
        $foodlist = Food::all(['id', 'name']);
        $food = $supermarket->food()->get(['food_id', 'name']);
        return view(
            'admin.supermarkets.edit',
            compact('supermarket', 'countries', 'foodlist', 'food')
        );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Supermarket $supermarket)
    {
        $supermarket->name = $request->name;
        $supermarket->location = $request->location;
        $supermarket->country_id = $request->country_id;
        $supermarket->food()->sync($request->food);
        $supermarket->save();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Supermarket $supermarket)
    {
        $supermarket->delete();
    }
}
