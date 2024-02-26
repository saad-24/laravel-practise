<?php

namespace App\Http\Controllers;
use App\Models\Funded;
use App\Models\Property;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function properties()
    {
        $properties = Property::all();
        $funded = Funded::all();
        return view('crowd.properties', compact('properties','funded'));
    }

    public function AdminDashboard()
    {
        return view('admin.dashboard');
    }

    public function Signup()
    {
        return view('crowd.registration');
    }

    public function Login()
    {
        return view('login');
    }


}
