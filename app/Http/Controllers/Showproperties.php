<?php

namespace App\Http\Controllers;

use App\Models\Property;
use App\Models\Funded;
use Illuminate\Http\Request;

class Showproperties extends Controller
{
    public function show()
    {
        $properties = Property::all();
        $funded = Funded::all();
        return view('crowd.properties', compact('properties','funded'));
    }
}
