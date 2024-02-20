<?php

namespace App\Http\Controllers;
use App\Models\Property;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
        // Retrieve all properties
        $properties = Property::all();
        $user = Auth::user();
        // Pass properties to the view
        return view('dashboard', compact('properties', 'user'));
    }
}
