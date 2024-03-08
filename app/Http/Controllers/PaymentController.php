<?php

namespace App\Http\Controllers;

use App\Models\Property;
use App\Models\Investment;
use App\Models\Ownership;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PaymentController extends Controller
{
    public function pay(Request $request)
    {
        $userId = Auth::user()->id;
        $cart = \Cart::session($userId);
        $cartItems = $cart->getContent();
        foreach ($cartItems as $item) {
            $property = Property::find($item->id);
            $cart->update($item->id, [
                'attributes'=> array(
                'property_price' => $property->price,
                'property_investment' => $property->total_investment,
                'status'=> 'Paid',
            )]);

        }
        $cart = \Cart::session($userId);
        $cartItems = $cart->getContent();
        foreach ($cartItems as $item) {
//             dd($item);
            if ($item->attributes['status'] === 'Paid') {

                $property = Property::find($item->id);
//                dd($property);
                $property->increment('total_investment', $item->price);
                $property->save();
                $investment = new Investment();
                $investment->user_id = $userId;
                $investment->property_id = $item->id;
                $investment->investment_amount = $item->price;
                $investment->save();
                // dd($item);
                $percentage_ownership = $item->price / $item->attributes['property_price'] * 100;
                // $ownership = Ownership::find($userId);
                $ownership = Ownership::where('user_id', $userId)->where('property_id', $item->id)->first();
                // dd()
                if ($ownership) {
                    $ownership->increment('percentage_ownership', $percentage_ownership);
                    // $ownership->percentage_ownership = $percentage_ownership;
                    $ownership->save();
                } else {

                    $ownership = Ownership::create([
                        'user_id' => $userId,
                        'property_id' => $item->id,
                        'percentage_ownership' => $percentage_ownership,
                    ]);
                }


            }
        }
        \Cart::clear();
        \Cart::session($userId)->clear();
        return redirect()->route('crowd')->with('success', 'Payment successful!');
    }
}
