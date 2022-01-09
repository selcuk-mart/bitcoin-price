<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use Illuminate\Http\Request;

class BitcoinData extends Controller
{
    //
    public static function fetch(Request $request)
    {
        $api_request = new Client();
        $url = 'https://api.coindesk.com/v1/bpi/historical/close.json?start='
            . $request->start
            . '&end='
            . $request->end
            . '&index=[' . $request->currency . ']';
        return $api_request->request('GET', $url);
    }
}
