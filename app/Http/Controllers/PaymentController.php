<?php

namespace App\Http\Controllers;

use App\Models\Property;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    public function pay(Request $request, Property $property)
    {
        $validatedData = $request->validate([
            'amount' => 'required|numeric|min:0',
        ]);

        $property->increment('total_investment', $validatedData['amount']);

        return redirect()->route('crowd')->with('success', 'Payment successful!');
    }
}
