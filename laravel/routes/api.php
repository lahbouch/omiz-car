<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\CarController;
use App\Http\Controllers\Api\BookingController;
use App\Http\Controllers\Api\AdminController;
use App\Http\Controllers\Api\CustomerController;
use App\Http\Controllers\Api\ContactMessageController;
use App\Http\Controllers\Api\FileUploadController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('api')->group(function () {
    // Admin authentication routes
    Route::post('/admin/login', [AdminController::class, 'login']);
    Route::post('/admin/logout', [AdminController::class, 'logout'])->middleware('auth:sanctum');

    // Customer routes
    Route::apiResource('customers', CustomerController::class);

    // Car routes
    Route::get('cars/available', [CarController::class, 'available']);
    Route::apiResource('cars', CarController::class);

    // Booking routes
    Route::apiResource('bookings', BookingController::class);

    // Contact message routes
    Route::apiResource('contact-messages', ContactMessageController::class);

    // File upload routes
    Route::post('/upload/car-image', [FileUploadController::class, 'uploadCarImage']);
    Route::post('/upload/car-images', [FileUploadController::class, 'uploadCarImages']);
});
