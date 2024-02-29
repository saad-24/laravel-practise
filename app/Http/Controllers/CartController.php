<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Property;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function add(Request $request, Property $property)
    {
        // Validate request data if needed

        // Add the property to the cart
        Cart::create([
            'property_id' => $property->id,
            'quantity' => 1,
        ]);

        return redirect()->route('crowd.cart')->with('success', 'Added to Cart successful!');
    }
}
