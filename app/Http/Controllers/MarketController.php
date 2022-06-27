<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MarketController extends Controller
{
    public function start()
    {
        return view('marketPlaceStart',
        [
            'layout'=>'market'
        ]);
    }
}
