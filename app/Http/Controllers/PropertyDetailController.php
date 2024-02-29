<?php

namespace App\Http\Controllers;
use App\Models\Property;
use App\Models\Investment;
use Illuminate\Support\Facades\Auth;
class PropertyDetailController extends Controller

{
    public function show($id)
    {
        $property = Property::with('images')->find($id);
        if (!$property) {
            abort(404);
        }

        $investment = Investment::find($id);
        return view('crowd.properties-detail', compact('property','investment'));
        // return view('crowd.property_detail', compact('property','investment'));
    }

}
