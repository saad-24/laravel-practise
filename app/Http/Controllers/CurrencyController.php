<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CurrencyController extends Controller
{
    public function setCurrency(Request $request)
    {
        $request->session()->put('selected_currency', $request->currency);
        return response()->json(['success' => true]);
    }
}

