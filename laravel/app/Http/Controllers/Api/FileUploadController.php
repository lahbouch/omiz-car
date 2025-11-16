<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class FileUploadController extends Controller
{
    /**
     * Upload a car image
     */
    public function uploadCarImage(Request $request)
    {
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // Max 2MB
        ]);

        try {
            // Store the image in the public disk under car-images directory
            $path = $request->file('image')->store('car-images', 'public');

            // Return the path to the stored image
            return response()->json([
                'success' => true,
                'image_path' => 'storage/' . $path,
                'message' => 'Image uploaded successfully'
            ], 200);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Failed to upload image: ' . $e->getMessage()
            ], 500);
        }
    }

    /**
     * Upload multiple car images
     */
    public function uploadCarImages(Request $request)
    {
        $request->validate([
            'images' => 'required|array',
            'images.*' => 'image|mimes:jpeg,png,jpg,gif|max:2048', // Max 2MB each
        ]);

        try {
            $imagePaths = [];

            foreach ($request->file('images') as $image) {
                // Store each image in the public disk under car-images directory
                $path = $image->store('car-images', 'public');
                $imagePaths[] = 'storage/' . $path;
            }

            // Return the paths to the stored images
            return response()->json([
                'success' => true,
                'image_paths' => $imagePaths,
                'message' => 'Images uploaded successfully'
            ], 200);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Failed to upload images: ' . $e->getMessage()
            ], 500);
        }
    }
}
