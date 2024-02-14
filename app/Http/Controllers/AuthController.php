<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User; // Import the User model

class AuthController extends Controller
{
    // Show signup form

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
}
