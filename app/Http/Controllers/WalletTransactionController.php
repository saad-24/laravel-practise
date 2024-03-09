<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\WalletTransaction;
use App\Models\WalletLog;
use Auth;

class WalletTransactionController extends Controller
{
    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function depositForm()
    {
        return view('crowd.deposit-form');
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function deposit(Request $request): \Illuminate\Http\RedirectResponse
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
}
