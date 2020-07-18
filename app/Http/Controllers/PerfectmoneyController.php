<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PerfectmoneyController extends Controller
{
    public function ask_balance(Request $request)
    {
        return view('perfectmoney.askbalance');
    }

    public function show_balance(Request $request)
    {
        dd($request);
    }
}
