<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Log;
use App\Models\Property;
use App\Models\PropertyImage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AdminPropertyController extends Controller
{
    public function store(Request $request)
    {
        // Validate form data
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'price' => 'required|numeric',
//            'images' => 'required',
            'images.*' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Create a new property record
        $property = Property::create([
            'name' => $validatedData['name'],
            'price' => $validatedData['price'],
        ]);
        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $image) {
                $path = $image->store('property_images', 'public');
                Log::info('Image stored at: ' . $path);
                $property->images()->create(['image_path' => $path]);
            }
        }

        // Redirect back with success message
        return redirect()->back()->with('success', 'Property added successfully!');
    }
    public function dashboard()
    {
        $properties = Property::all();
        return view('admin.properties', compact('properties'));
    }
}
