<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Log;
use App\Models\Property;
use App\Models\PropertyImage;
use App\Models\Funded;
use Illuminate\Http\Request;

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
    public function edit(Property $property)
    {
        return view('admin.edit', compact('property'));
    }

    public function update(Request $request, Property $property)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'price' => 'required|numeric',
        ]);

        $property->update($validatedData);

        return redirect()->route('admin.property.dashboard')->with('success', 'Property updated successfully!');
    }

    public function destroy(Property $property)
    {
        $property->delete();

        return redirect()->route('admin.property.dashboard')->with('success', 'Property deleted successfully!');
    }

    public function moveToFunded(Property $property)
    {
        Funded::create([
            'name' => $property->name,
            'price' => $property->price,
            'total_investment' => $property->total_investment,
        ]);

        $property->delete();

        return redirect()->route('all.properties')->with('success', 'Property moved to Funded successfully!');
    }

}
