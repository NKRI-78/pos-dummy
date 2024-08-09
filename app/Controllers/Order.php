<?php

namespace App\Controllers;

use GuzzleHttp\Client;

use App\Controllers\Base;

class Order extends BaseController
{
    public function index()
    {
        $client = new Client();
        $response = $client->request('POST', 'https://api-hp3ki.inovatiftujuh8.com/api/v1/admin/carts');
         
        $data = json_decode($response->getBody(), true);

        $totalPrice = 0;

        foreach ($data["data"] as $key => $value) {
            $totalPrice += $value["price"]; 
        }

        return view('order/index', [
            "data" => $data["data"],
            "totalprice" => $totalPrice
        ]);
    }
}
