<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Property;
use App\Models\Investment;
use Illuminate\Support\Facades\Auth;
use Srmklive\PayPal\Services\PayPal as PayPalClient;


class PayPalController extends Controller
{
    /**
     * create transaction.
     *
     * @return \Illuminate\Http\Response
     */
    public function createTransaction()
    {
        return view('crowd.transaction');
    }
    /**
     * process transaction.
     *
     * @return \Illuminate\Http\Response
     */
    public function processTransaction(Request $request)
    {
        
        // cart sub total
        $userId = Auth::user()->id;
        $subTotal = \Cart::session($userId)->getSubTotal();

        $provider = new PayPalClient;
        $provider->setApiCredentials(config('paypal'));
        $paypalToken = $provider->getAccessToken();
        $response = $provider->createOrder([
            "intent" => "CAPTURE",
            "application_context" => [
                "return_url" => route('successTransaction'),
                "cancel_url" => route('cancelTransaction'),
            ],
            "purchase_units" => [
                0 => [
                    "amount" => [
                        "currency_code" => "USD",
                        "value" => $subTotal
                    ]
                ]
            ]
        ]);
        if (isset($response['id']) && $response['id'] != null) {
            // redirect to approve href
            foreach ($response['links'] as $links) {
                if ($links['rel'] == 'approve') {
                    return redirect()->away($links['href']);
                }
            }
            return redirect()
                ->route('createTransaction')
                ->with('error', 'Something went wrong.');
        } else {
            return redirect()
                ->route('createTransaction')
                ->with('error', $response['message'] ?? 'Something went wrong.');
        }
    }

    
    public function successTransaction(Request $request)
    {

        $provider = new PayPalClient;
        $provider->setApiCredentials(config('paypal'));
        $provider->getAccessToken();
        $response = $provider->capturePaymentOrder($request['token']);
        if (isset($response['status']) && $response['status'] == 'COMPLETED') {
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
            return redirect()
                ->route('createTransaction')
                ->with('success', 'Transaction complete.');
            
        } else {
            return redirect()
                ->route('createTransaction')
                ->with('error', $response['message'] ?? 'Something went wrong.');
        }
    }

    /**
     * cancel transaction.
     *
     * @return \Illuminate\Http\Response
     */
    public function cancelTransaction(Request $request)
    {
        return redirect()
            ->route('createTransaction')
            ->with('error', $response['message'] ?? 'You have canceled the transaction.');
    }
}