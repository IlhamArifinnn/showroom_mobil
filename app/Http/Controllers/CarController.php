<?php

namespace App\Http\Controllers;

use App\Models\Car;
use App\Models\Type;
use Illuminate\Http\Request;

class CarController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cars = Car::all();
        return view('cars.index', compact('cars'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $types = Type::all();

        return view('cars.create', compact('types'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'photo' => 'nullable|string|max:255',
            'type_id' => 'required|integer|exists:types,id',
            'cost_per_day' => 'required|integer',
            'year' => 'required|integer',
            'license_plate' => 'required|string|max:255',
        ]);

        Car::create($request->all());

        return redirect()->route('cars.index')->with('success', 'Car created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Car $car)
    {
        return view('cars.show', compact('car'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Car $car)
    {
        $types = Type::all();

        return view('cars.edit', compact('car', 'types'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Car $car)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'photo' => 'nullable|string|max:255',
            'type_id' => 'required|integer|exists:types,id',
            'cost_per_day' => 'required|integer',
            'year' => 'required|integer',
            'license_plate' => 'required|string|max:255',
        ]);

        $car->update($request->all());

        return redirect()->route('cars.index')->with('success', 'Car updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Car $car)
    {
        $car->delete();

        return redirect()->route('cars.index')->with('success', 'Car deleted successfully.');
    }
}
