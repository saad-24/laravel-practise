<?php

namespace App\Http\Controllers;
use App\Models\Card;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;


class CardController extends Controller
{
    public function saveCard(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'card_number' => 'required|digits:16',
            'card_name' => 'required',
            'expiry_date' => 'required|date_format:m/Y', // Month/Year format like '02/2024'
            'cvc' => 'required|digits:3',
        ]);
    
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
        // dd($request);
        $userId = Auth::user()->id;
        // dd($userId);
        // Create a new card instance
        Card::create([
            'card_number' => $request->input('card_number'),
            'expiry_date' => $request->input('expiry_date'),
            'cvv' => $request->input('cvc'),
            'card_name' => $request->input('card_name'),
            'user_id' => $userId,
        ]);

        return redirect()->route('crowd.wallet');
    }
}
