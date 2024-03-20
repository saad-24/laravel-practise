<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class SignupController extends Controller
{
    public function step1(Request $request)
    {
        // Validate step 1 data

        $validatedData = $request->validate([
            'uname' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
        ]);

//        dd($validatedData);

        // Store step 1 data in session
        $request->session()->put('step1', $validatedData);

        // Redirect to step 2
        return redirect()->route('signup.step2');
    }



    public function step2(Request $request)
    {
        // Validate step 2 data
        $validatedData = $request->validate([
            'password' => 'required|string|min:8|regex:/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d).+$/',
        ]);

//        dd($validatedData);

        // Store step 2 data in session
        $request->session()->put('step2', $validatedData);

        // Redirect to step 3
        return redirect()->route('signup.step3');
    }

    public function step3(Request $request)
    {
        // Validate step 3 data
        $validatedData = $request->validate([
            'phone' => 'required',
        ]);

        // Store step 3 data in session
        $request->session()->put('step3', $validatedData);

        // Redirect to step 4
        return redirect()->route('signup.step4');
    }

    public function step4(Request $request)
    {
        // Validate step 4 data

//        dd($request->all('otp'));
        $validatedData = $request->validate([
            'otp' => 'required',
        ]);

//        dd($validatedData);

        if ($validatedData['otp'] === '0000') {
            $userData = array_merge(
                $request->session()->get('step1'),
                $request->session()->get('step2'),
//                ['otp' => $validatedData['otp']]
            );

            if ($userData['uname'] === 'admin') {
                $user = new User();
                $user->name = $userData['uname'];
                $user->email = $userData['email'];
                $user->password = bcrypt($userData['password']);
                $user->is_admin = 1;
                $user->save();
            } else {
                $user = new User();
                $user->name = $userData['uname'];
                $user->email = $userData['email'];
                $user->password = bcrypt($userData['password']);
                $user->save();
            }
            // Clear session data
            $request->session()->forget(['step1', 'step2', 'step3']);

            // Redirect to thank you page or user profile page
            return redirect()->route('crowd');
        }
    }
}

