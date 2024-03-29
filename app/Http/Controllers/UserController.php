<?php

namespace App\Http\Controllers;

use App\Models\Property;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    // Handle signup form submission
    public function signup(Request $request)
    {
        // Validate input
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8',
        ]);

        // Create new user
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = bcrypt($request->password); // Hash the password
        $user->save();

        // Redirect after signup
        return redirect('/login')->with('success', 'Signup successful. You can now log in.');
    }

    // Handle login form submission
    public function login(Request $request)
    {


        // Validate login credentials

        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        // Attempt to authenticate the user
        if (Auth::attempt($credentials)) {
            if (Auth::user()->is_admin) {
                // Redirect admin user to admin.crowd route
                return redirect()->route('admin.home');
            } else {
                // Redirect non-admin user to crowd route
                return redirect()->route('crowd');
            }
        } else {
            // Authentication failed
            return redirect()->back()->withInput($request->only('email'))->withErrors([
                'email' => 'These credentials do not match our records.',
            ]);
        }
    }

    // Logout the user
    public function logout()
    {
        Auth::logout();
        return redirect('/login');
    }

    public function userProperties()
    {
        $properties = Property::all(); // Fetch all properties
        if (Auth::user()->is_admin) {
            // Redirect admin user to admin.crowd route
            return view('admin.index', compact('properties'));
        } else {
            // Redirect non-admin user to crowd route
            return view('crowd.index', compact('properties'));
        }
        
    }


}
