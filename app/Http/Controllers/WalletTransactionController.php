<?php

namespace App\Http\Controllers;

use App\Models\Investment;
use App\Models\Ownership;
use App\Models\Property;
use Illuminate\Http\Request;
use App\Models\WalletTransaction;
use App\Models\WalletLog;
use Auth;


class WalletTransactionController extends Controller
{
    public function depositForm()
    {
        return view('crowd.deposit-form');
    }

    public function withdrawForm()
    {
        return view('crowd.withdraw-form');
    }

    public function withdrawError()
    {
        return view('crowd.wallet-error');
    }

    public function withdrawSuccess()
    {
        return view('crowd.stripe-success');
    }

    public function deposit(Request $request)
    {
        $request->validate([
            'type' => 'required',
            'amount' => 'required|numeric|min:0',
        ]);

        $user = Auth::user();

        $wallet = WalletTransaction::where('user_id', $user->id)->first();

        if ($wallet) {
            $wallet->increment('wallet_balance', $request->amount);
        } else {
            // Create a wallet transaction
            $transaction = new WalletTransaction();
            $transaction->user_id = $user->id;
            $transaction->wallet_balance = $request->amount;
            $transaction->save();
        }

        $log = new WalletLog();
        $log->user_id = $user->id;
        $log->type = $request->type;
        $log->status = 'completed';
        $log->date = now();
        $log->amount = $request->amount;
        $log->save();

        return redirect()->route('crowd.wallet')->with('success', 'Deposit successful.');
    }

    public function withdraw(Request $request)
    {
        $request->validate([
            'type' => 'required',
            'amount' => 'required|numeric|min:0',
        ]);

        $user = Auth::user();

        $wallet = WalletTransaction::where('user_id', $user->id)->first();

        if ($wallet) {
            $existing_balance = $wallet->wallet_balance;
            $wallet->decrement('wallet_balance', $request->amount);
        } else {
            if ($request->amount > 0) {
                return redirect()->route('withdraw.error')->with('error', 'Insufficient balance for withdrawal. Please deposit funds first.');
            }
        }

        $log = new WalletLog();
        $log->user_id = $user->id;
        $log->type = $request->type;
        $log->status = 'completed';
        $log->date = now();
        $log->amount = $request->amount;
        $log->save();

        return redirect()->route('crowd.wallet')->with('success', 'Withdraw successful.');
    }
    public function withdrawCart()
    {
//        dd('here');
        $userId = Auth::user()->id;
        $cart = \Cart::session($userId);
        $subTotal = \Cart::session($userId)->getSubTotal();
        $wallet = WalletTransaction::where('user_id', $userId)->first();

        if ($wallet) {
            if ($subTotal < $wallet->wallet_balance) {
                $wallet->decrement('wallet_balance', $subTotal);
                $log = new WalletLog();
                $log->user_id = $userId;
                $log->type = 'purchase';
                $log->status = 'completed';
                $log->date = now();
                $log->amount = $subTotal;
                $log->save();

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
                return redirect()->route('withdraw.success')->with('success', 'Payment successful!');
            } else {
                return redirect()->route('withdraw.error')->with('error', 'Insufficient balance for withdrawal.');
            }

        } else {

            return redirect()->route('withdraw.error')->with('error', 'Insufficient balance for withdrawal. Please deposit funds first.');
        }

    }
}
