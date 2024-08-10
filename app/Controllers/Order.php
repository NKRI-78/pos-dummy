<?php

namespace App\Controllers;

use GuzzleHttp\Client;

use App\Controllers\Base;

class Order extends BaseController
{
    public function index()
    {
        $client = new Client();
        $response = $client->request('POST', 'https://api-hp3ki.inovatiftujuh8.com/api/v1/admin/cart-pos');
         
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

    public function removeCart()
    {
        $catId = $this->request->getPost('cat_id');

        try {
            $postData = [
                'cat_id' => $catId,          
            ];
            
            $client = new Client();
            $response = $client->request('POST', 'https://api-hp3ki.inovatiftujuh8.com/api/v1/admin/delete-cart-pos',
                [
                    'json' => $postData,
                    'headers' => [
                        'Content-Type' => 'application/json',
                    ]
                ]
            );
            
            $data = json_decode($response->getBody(), true);

            return $this->response->setJSON([
                'status' => 200, 
                'message' => 'Ok.'
            ]);

        } catch (\GuzzleHttp\Exception\RequestException $e) {
            return $this->response->setJSON([
                'status' => 'error',
                'message' => $e->getMessage()
            ]);
        }
    }
}
