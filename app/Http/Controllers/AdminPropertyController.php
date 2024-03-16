<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Log;
use App\Models\Property;
use App\Models\Blog;
use App\Models\BlogImage;
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
            'images.*' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
            'bed' => 'required|integer',
            'bath' => 'required|integer',
            'area' => 'required|numeric',
            'category' => 'required|string|max:255',
            'status' => 'required|string|max:255',
        ]);
        // dd($validatedData);
        $msg=null;
        // Create a new property record
        $property = Property::create([
            'name' => $validatedData['name'],
            'price' => $validatedData['price'],
            'bed' => $validatedData['bed'],
            'bath' => $validatedData['bath'],
            'area' => $validatedData['area'],
            'category' => $validatedData['category'],
            'status' => $validatedData['status'],
        ]);
        if($property){
            $msg = "Property added successfully";
        }

        if ($request->hasFile('images')) {
            // Upload and process the new profile image
            foreach ($request->file('images') as $image) {
                $imageName = time() . '_' . $image->getClientOriginalName();
                $image->move(public_path('images/property_images'), $imageName);
                $property->images()->create(['image_path' => $imageName]);
            }
            $msg .= ' with image';
        }
        // Redirect back with success message
        return redirect()->back()->with('success', $msg.'!');
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
            'bed' => 'required|integer',
            'bath' => 'required|integer',
            'area' => 'required|numeric',
            'category' => 'required|string|max:255',
            'status' => 'required|string|max:255',
            'images.*' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $property->update($validatedData);

        return redirect()->route('admin.panel.property')->with('success', 'Property updated successfully!');
    }

    public function destroy(Property $property)
    {
        $property->delete();

        return redirect()->route('admin.panel.property')->with('success', 'Property deleted successfully!');
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

    public function index()
    {

        return route('admin.crowd');
    }

    public function blogstore(Request $request)
    {
        // Validate form data
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'content' => 'required|string',
            'images.*' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
            'category' => 'required|string|max:255',
        ]);
        // dd($validatedData);
        $msg=null;
        // Create a new property record
        $blog = Blog::create([
            'blog_name' => $validatedData['name'],
            'blog_content' => $validatedData['content'],
            'category' => $validatedData['category'],
        ]);
        if($blog){
            $msg = "Property added successfully";
        }

        if ($request->hasFile('images')) {
            // Upload and process the new profile image
            foreach ($request->file('images') as $image) {
                $imageName = time() . '_' . $image->getClientOriginalName();
                $image->move(public_path('images/blog_images'), $imageName);
                $blog->images()->create(['image_path' => $imageName]);
            }
            $msg .= ' with image';
        }
        // Redirect back with success message
        return redirect()->back()->with('success', $msg.'!');
    }

    public function blogform()
    {
        return view('admin.add_blog');
    }

}
