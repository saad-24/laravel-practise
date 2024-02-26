<?php

namespace App\Http\Controllers;
use App\Models\Property;
use App\Models\Investment;
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
    }

}
