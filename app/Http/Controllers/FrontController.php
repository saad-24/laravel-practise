<?php

namespace App\Http\Controllers;
use App\Models\Funded;
use App\Models\Property;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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

    public function Rewards()
    {
        return view('crowd.reward-dashboard');
    }

    public function Portfolio()
    {
        return view('crowd.portfolio-dashboard');
    }

    public function Cart()
    {
        return view('crowd.cart-dashboard');
    }

    public function Wallet()
    {
        return view('crowd.wallet-dashboard');
    }

    public function About()
    {
        return view('crowd.about');
    }

    public function Golden()
    {
        return view('crowd.golden-visa');
    }


}
