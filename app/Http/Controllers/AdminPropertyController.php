<?php

namespace App\Http\Controllers;

use App\Models\Property;
use Illuminate\Http\Request;

class AdminPropertyController extends Controller
{
    public function store(Request $request)
    {
        // Validate form data
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'price' => 'required|numeric',
        ]);

        // Create a new property record
        Property::create([
            'name' => $validatedData['name'],
            'price' => $validatedData['price'],
        ]);

        // Redirect back with success message
        return redirect()->back()->with('success', 'Property added successfully!');
    }
    public function dashboard()
    {
        $properties = Property::all();
        return view('admin.dashboard', compact('properties'));
    }
}
