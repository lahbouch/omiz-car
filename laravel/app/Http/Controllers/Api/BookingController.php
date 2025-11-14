<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Booking;
use App\Models\Car;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $bookings = Booking::with(['customer', 'car'])->get();
        return response()->json($bookings);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'customer_id' => 'required|exists:customers,id',
            'car_id' => 'required|exists:cars,id',
            'pickup_date' => 'required|date',
            'return_date' => 'required|date|after:pickup_date',
            'pickup_location' => 'required|string|max:255',
            'return_location' => 'required|string|max:255',
            'total_amount' => 'required|numeric',
            'status' => 'string|in:pending,confirmed,cancelled,completed',
            'special_requests' => 'nullable|string',
            'insurance_included' => 'boolean',
        ]);

        // Check if car is available for the requested dates
        $conflictingBookings = Booking::where('car_id', $validated['car_id'])
            ->where('status', '!=', 'cancelled')
            ->where(function ($query) use ($validated) {
                $query->whereBetween('pickup_date', [$validated['pickup_date'], $validated['return_date']])
                    ->orWhereBetween('return_date', [$validated['pickup_date'], $validated['return_date']])
                    ->orWhere(function ($query) use ($validated) {
                        $query->where('pickup_date', '<=', $validated['pickup_date'])
                            ->where('return_date', '>=', $validated['return_date']);
                    });
            })
            ->exists();

        if ($conflictingBookings) {
            return response()->json(['error' => 'Car is not available for the selected dates'], 400);
        }

        $booking = Booking::create($validated);
        return response()->json($booking, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $booking = Booking::with(['customer', 'car'])->findOrFail($id);
        return response()->json($booking);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $booking = Booking::findOrFail($id);

        $validated = $request->validate([
            'customer_id' => 'exists:customers,id',
            'car_id' => 'exists:cars,id',
            'pickup_date' => 'date',
            'return_date' => 'date|after:pickup_date',
            'pickup_location' => 'string|max:255',
            'return_location' => 'string|max:255',
            'total_amount' => 'numeric',
            'status' => 'string|in:pending,confirmed,cancelled,completed',
            'special_requests' => 'nullable|string',
            'insurance_included' => 'boolean',
        ]);

        $booking->update($validated);
        return response()->json($booking);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $booking = Booking::findOrFail($id);
        $booking->update(['status' => 'cancelled']);
        return response()->json(null, 204);
    }
}
