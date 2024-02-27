<?php

namespace App\Http\Controllers;

use App\Models\Property;
use App\Models\Funded;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class Showproperties extends Controller
{
    public function show()
    {
        $properties = Property::all();
        $funded = Funded::all();
        $user = Auth::user();
        return view('crowd.properties', compact('properties','funded', 'user'));
    }
}
