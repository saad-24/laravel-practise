<?php

namespace App\Http\Controllers;

use App\Models\Property;
use App\Models\Investment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PaymentController extends Controller
{
    public function pay(Request $request, Property $property)
    {
        try {
            $validatedData = $request->validate([
                'amount' => ['required', 'numeric', 'min:500'],
            ]);

            $property->increment('total_investment', $validatedData['amount']);
            // Create a new investment record
            $investment = new Investment();
            $investment->user_id = Auth::id(); // Current authenticated user ID
            $investment->property_id = $property->id;
            $investment->investment_amount = $validatedData['amount'];
            $investment->save();



            return redirect()->route('crowd')->with('success', 'Payment successful!');
        } catch (ValidationException $e) {
            return redirect()->back()->withErrors($e->errors())->withInput();
        }
    }
}
