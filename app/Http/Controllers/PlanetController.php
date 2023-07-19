<?php

namespace App\Http\Controllers;

use App\Models\Planet;
use Illuminate\Http\Request;

class PlanetController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return response()->json([
            'planets' => Planet::get()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $planets = new Planet;
        $planets->name = $request->name;
        $planets->diameter = $request->diameter;
        $planets->rotation_period = $request->rotation_period;
        $planets->climate = $request->climate;
        $planets->terrain = $request->terrain;
        $planets->surface_water = $request->surface_water;
        $planets->population = $request->population;
        $planets->image = $request->image;
        $planets->save();

        return response()->json([
            'message' => 'Planet created successfully',
            'planet' => $planets
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Planet $planet)
    {
        return response()-> json([
            'planet' => $planet
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Planet $planet)
    {
        $planet->name = $request->name;
        $planet->diameter = $request->diameter;
        $planet->rotation_period = $request->rotation_period;
        $planet->climate= $request->climate;
        $planet->terrain = $request->terrain;
        $planet->surface_water = $request->surface_water;
        $planet->population = $request->population;
        $planet->image = $request->image;
        $planet->save();

        return response()->json([
            'message' => 'Planet information updated successfully',
            'planet' => $planet
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Planet $planet)
    {
        $planet->delete();
        return response()->json([
            'message' => 'Planet deleted successfully'
        ]);
    }
}
