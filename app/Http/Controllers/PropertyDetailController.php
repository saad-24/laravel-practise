<?php

namespace App\Http\Controllers;
use App\Models\Property;

class PropertyDetailController extends Controller
{
    public function show($id)
    {
        $property = Property::find($id);
        if (!$property) {
            abort(404); // Or any other appropriate action
        }
        return view('crowd.property_detail', compact('property'));
    }
}
