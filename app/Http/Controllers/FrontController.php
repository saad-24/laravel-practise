<?php

namespace App\Http\Controllers;
use App\Models\Funded;
use App\Models\Property;
use App\Models\Investment;
use App\Models\Cart;
use App\Models\Card;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FrontController extends Controller
{
    public function properties()
    {
        $properties = Property::all();
        $funded = Funded::all();
        if (Auth::user()->is_admin) {
            // Redirect admin user to admin.crowd route
            return view('admin.properties', compact('properties','funded'));
        } else {
            // Redirect non-admin user to crowd route
            return view('crowd.properties', compact('properties','funded'));
        }
        
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
        $user = Auth::user();

        $properties = Property::whereHas('investments', function ($query) use ($user) {
            $query->where('user_id', $user->id);
        })->get();

        $userTotalInvestments = Investment::where('user_id', $user->id)->get();

        $totalInvestment = 0;
        foreach($userTotalInvestments as $userTotalInvestment) {
            $totalInvestment += $userTotalInvestment['investment_amount'];
        }

        return view('crowd.reward-dashboard', compact('properties', 'totalInvestment'));
    }

    public function Portfolio()
    {
        $user = Auth::user();

        $properties = Property::whereHas('investments', function ($query) use ($user) {
            $query->where('user_id', $user->id);
        })->get();
        // dd($properties);

        return view('crowd.portfolio-dashboard', compact('properties'));
    }


    public function cart()
    {
        $cartItems = Cart::all();

        $properties = Property::whereIn('id', $cartItems->pluck('property_id'))->get();

        return view('crowd.cart-dashboard', compact('cartItems', 'properties'));
    }

    public function Wallet()
    {
        $userId = Auth::user()->id;
        $card = Card::where('user_id', $userId)->get();
        // dd($card);
        return view('crowd.wallet-dashboard', compact('card'));
    }

    public function About()
    {
        return view('crowd.about');
    }

    public function Golden()
    {
        return view('crowd.golden-visa');
    }

    public function addCard()
    {
        return view('crowd.add_card');
    }


}
