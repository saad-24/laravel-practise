<?php

namespace App\Http\Controllers;
use App\Models\Blog;
use App\Models\Contact;
use App\Models\Funded;
use App\Models\Ownership;
use App\Models\Property;
use App\Models\Investment;
use App\Models\Cart;
use App\Models\Card;
use App\Models\User;
use App\Models\WalletLog;
use App\Models\WalletTransaction;
use DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FrontController extends Controller
{
    public function properties()
    {
        $properties = Property::all();
        if (Auth::user()->is_admin) {
            // Redirect admin user to admin.crowd route
            return view('admin.properties', compact('properties'));
        } else {
            // Redirect non-admin user to crowd route
            return view('crowd.properties', compact('properties'));
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
        $investments = $user->investments;

        $totalInvestmentAmount = $investments->sum('investment_amount');
        $totalInvestmentsByProperty = $user->investments()
            ->select('property_id', DB::raw('SUM(investment_amount) as total_investment'))
            ->groupBy('property_id')
            ->get();


        return view('crowd.portfolio-dashboard', compact('totalInvestmentsByProperty', 'totalInvestmentAmount'));
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
        $wallet = WalletTransaction::where('user_id', $userId)->first();
        $wallet_logs = WalletLog::where('user_id', $userId)->get();
//        dd($wallet_logs);
        return view('crowd.wallet-dashboard', compact('card','wallet','wallet_logs'));
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

    public function checkout()
    {
        return view('crowd.checkout');
    }

    public function account()
    {
        $user = Auth::user();
        return view('crowd.account-dashboard', compact('user'));
    }

    public function userDashboard()
    {
        return view('crowd.profile-dashboard');
    }

    public function preference()
    {
        return view('crowd.preference-dashboard');
    }

    public function tier()
    {
        return view('crowd.tier-dashboard');
    }


    public function blog()
    {
        $blogs = Blog::all();
        if (Auth::user()->is_admin) {
            // Redirect admin user to admin.crowd route
            return view('admin.blog', compact('blogs'));
        } else {
            // Redirect non-admin user to crowd route
            return view('crowd.blog', compact('blogs'));
        }

    }

    public function en()
    {
        return view('crowd.en');
    }

    public function registertest()
    {
        return view('signup-step1');
    }

    public function registertest2()
    {
        return view('signup-step2');
    }

    public function registertest3()
    {
        return view('signup-step3');
    }

    public function registertest4()
    {
        return view('signup-step4');
    }


    public function termsconditions()
    {
        return view('crowd.terms-and-conditions');
    }

    public function privacypolicy()
    {
        return view('crowd.privacy-policy');
    }

    public function sellproperty()
    {
        return view('crowd.sell-us-property');
    }


    public function adminPanel()
    {
        return view('admin.admin-panel');
    }

    public function adminProperty()
    {
        $properties = Property::all();
        return view('admin.admin-properties', compact('properties'));
    }

    public function adminBlog()
    {
        $blogs = Blog::all();
        return view('admin.admin-blog', compact('blogs'));
    }

    public function adminUsers()
    {
        $users = User::all();
        return view('admin.admin-users', compact('users'));
    }

    public function adminWallet()
    {
        $wallet = WalletTransaction::all();
        $wallet_logs = WalletLog::all();
        return view('admin.admin-wallet', compact('wallet', 'wallet_logs'));
    }

    public function adminOwnership()
    {
        $ownerships = Ownership::all();
        return view('admin.admin-ownerships', compact('ownerships'));
    }

    public function adminInvestment()
    {
//        $investments = Investment::all();
        $investments = Investment::paginate(10);
        return view('admin.admin-investments', compact('investments'));
    }

    public function adminQueries()
    {
        $queries = Contact::all();
        return view('admin.admin-contact', compact('queries'));
    }

}
