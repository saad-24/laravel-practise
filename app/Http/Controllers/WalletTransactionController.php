<?php

namespace App\Http\Controllers;

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

    public function deposit(Request $request)
    {
        // Validate the deposit form
//        dd($request);
        $request->validate([
            'type' => 'required',
            'amount' => 'required|numeric|min:0',
        ]);

        // Get the authenticated user
        $user = Auth::user();


        // Update wallet
        $wallet = WalletTransaction::where('user_id', $user->id)->first();
//        dd($wallet);
        if ($wallet) {
            $wallet->increment('wallet_balance', $request->amount);
        } else {
            // Create a wallet transaction
            $transaction = new WalletTransaction();
            $transaction->user_id = $user->id;
            $transaction->wallet_balance = $request->amount;
            $transaction->save();
        }



        // Create a wallet log for the deposit
        $log = new WalletLog();
        $log->user_id = $user->id;
        $log->type = $request->type;
        $log->status = 'completed';
        $log->date = now();
        $log->amount = $request->amount;
        $log->save();

        // Update the user's wallet balance
//        $user->wallet_balance += $request->amount;
//        $user->save();

        return redirect()->route('crowd.wallet')->with('success', 'Deposit successful.');
    }
}
