<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Car;
use Illuminate\Http\Request;

class CarController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cars = Car::with('category')->get();
        return response()->json($cars);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'make' => 'required|string|max:255',
            'model' => 'required|string|max:255',
            'registration_number' => 'required|string|unique:cars',
            'year' => 'required|integer',
            'color' => 'required|string|max:255',
            'category_id' => 'required|exists:car_categories,id',
            'available' => 'boolean',
            'features' => 'nullable|string',
            'daily_rate' => 'required|numeric',
            'image_path' => 'nullable|string',
        ]);

        $car = Car::create($validated);
        return response()->json($car, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $car = Car::with('category')->findOrFail($id);
        return response()->json($car);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $car = Car::findOrFail($id);

        $validated = $request->validate([
            'make' => 'string|max:255',
            'model' => 'string|max:255',
            'registration_number' => 'string|unique:cars,registration_number,' . $car->id,
            'year' => 'integer',
            'color' => 'string|max:255',
            'category_id' => 'exists:car_categories,id',
            'available' => 'boolean',
            'features' => 'nullable|string',
            'daily_rate' => 'numeric',
            'image_path' => 'nullable|string',
        ]);

        $car->update($validated);
        return response()->json($car);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $car = Car::findOrFail($id);
        $car->delete();
        return response()->json(null, 204);
    }

    /**
     * Display available cars.
     */
    public function available()
    {
        $cars = Car::with('category')->where('available', true)->get();
        return response()->json($cars);
    }
}
