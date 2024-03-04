<?php

namespace App\Http\Controllers;

// use App\Models\Cart;
use App\Models\Property;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    public function index()
    {
        $userId = Auth::user()->id;
        $cart = \Cart::session($userId);
        $data = $cart->getContent();
        // dd($data);
        // $userId = auth()->user()->id;
        // $data = \Cart::session($userId)->getContent();
        $subTotal = \Cart::session($userId)->getSubTotal();

        return view('crowd.cart-dashboard', compact('data', 'subTotal'));
    }


    public function addToCart(Request $request, Property $property)
    {
        $userId = Auth::user()->id;
        $cart = \Cart::session($userId);
        $items = $cart->getContent();
        $itemExists = false;
        // dd($items);
        // $newPrice = 0;
        foreach ($items as $item) {
            if ($property->id == $item->id) {
                // dd($item->price);
                $newPrice = $item->price + $request->price;

                $cart->update($item->id, [
                    'price' => $newPrice,
                ]);
                $itemExists = true;
                break;
                // dd($cart->getContent());

            }
        }
        
        if (!$itemExists) {
            // Add the item to the cart
            $cart->add([
                'id' => $property->id,
                'name' => $property->name,
                'price' => $request->price,
                'quantity' => 1,
            ]);
        }

        return redirect()->back()->with('success', 'Item added to cart successfully');
    }

}
