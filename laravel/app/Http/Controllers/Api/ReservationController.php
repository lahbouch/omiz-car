<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Reservation;
use Illuminate\Http\Request;

class ReservationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $reservations = Reservation::with('car')->get();
        return response()->json($reservations);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'firstname' => 'required|string|max:255',
            'lastname' => 'required|string|max:255',
            'start_date' => 'required|date',
            'end_date' => 'required|date|after_or_equal:start_date',
            'notes' => 'nullable|string',
            'car_id' => 'nullable|exists:cars,id',
            'car_name' => 'nullable|string|max:255',
            'status' => 'string|in:pending,confirmed,in progress,completed,rejected'
        ]);

        $reservation = Reservation::create($validatedData);

        // Load the car relationship if car_id is provided
        if ($reservation->car_id) {
            $reservation->load('car');
        }

        return response()->json($reservation, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(Reservation $reservation)
    {
        $reservation->load('car');
        return response()->json($reservation);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Reservation $reservation)
    {
        $validatedData = $request->validate([
            'firstname' => 'string|max:255',
            'lastname' => 'string|max:255',
            'start_date' => 'date',
            'end_date' => 'date|after_or_equal:start_date',
            'notes' => 'nullable|string',
            'car_id' => 'nullable|exists:cars,id',
            'car_name' => 'nullable|string|max:255',
            'status' => 'string|in:pending,confirmed,in progress,completed,rejected'
        ]);

        $reservation->update($validatedData);

        // Load the car relationship if car_id is provided
        if ($reservation->car_id) {
            $reservation->load('car');
        }

        return response()->json($reservation);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Reservation $reservation)
    {
        $reservation->delete();
        return response()->json(null, 204);
    }
}
