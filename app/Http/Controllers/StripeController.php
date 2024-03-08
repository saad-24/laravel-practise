<?php

namespace App\Http\Controllers;
use Stripe;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Property;
use App\Models\Investment;

class StripeController extends Controller
{
    public function index() {
        
        $userId = Auth::user()->id;
        $subTotal = \Cart::session($userId)->getSubTotal();
        return view('crowd.stripe-form', compact('subTotal'));
    }

    public function charge(Request $request) {

        $userId = Auth::user()->id;
        $subTotal = \Cart::session($userId)->getSubTotal();

        $request->validate([
            'card_no' => 'required',
            'expiry_month' => 'required',
            'expiry_year' => 'required',
            'cvv' => 'required',
        ]);
 
        $stripe = Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));
        
        $response = \Stripe\Token::create(array(
            "card" => array(
                "number"    => $request->input('card_no'),
                "exp_month" => $request->input('expiry_month'),
                "exp_year"  => $request->input('expiry_year'),
                "cvc"       => $request->input('cvv')
            )));
        if (!isset($response['id'])) {
            return redirect()->route('addmoney.paymentstripe');
        }
        $charge = \Stripe\Charge::create([
            'card' => $response['id'],
            'currency' => 'USD',
            'amount' =>  $subTotal,
            'description' => 'Property',
        ]);

        if($charge['status'] == 'succeeded') {
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
            foreach ($cartItems as $item) {
                if ($item->attributes['status'] === 'Paid') {
                    $property = Property::find($item->id);
                // dd($property);
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
                    if ($ownership) {
                        $ownership->increment('percentage_ownership', $percentage_ownership);
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
            

            return view('crowd.stripe-succes')->with('succes', 'Payment successful!');


        } else {
            return redirect()->route('crowd.cart')->with('error', 'something went to wrong.');
        }


        
    }
}
