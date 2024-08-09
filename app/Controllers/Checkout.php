<?php

namespace App\Controllers;

use GuzzleHttp\Client;

use App\Controllers\Base;

class Checkout extends BaseController
{
    public function index($id)
    {
        $session = session();
        
        $fullname = $session->get('fullname');
        $phone = $session->get('phone');
        $address = $session->get('address');

        return view('checkout/index', [
            'fullname' => $fullname,
            'phone' => $phone,
            'address' => $address
        ]);
    }

    public function checkoutOrder()
    {
        $data = $this->request->getPost('data');
        $totalQty = $this->request->getPost('total_qty');
        $totalPrice = $this->request->getPost('total_price');
    
        $client = new \GuzzleHttp\Client();
    
        $responses = [];
    
        try {
            $postData = [
                'cat_id' => $data,          
                'qty' => (int) $totalQty,
                'total_price' => (int) $totalPrice,
            ];

            $response = $client->request('POST', 'https://api-hp3ki.inovatiftujuh8.com/api/v1/admin/insert-order-pos', [
                'json' => $postData,
                'headers' => [
                    'Content-Type' => 'application/json',
                ]
            ]);

            $responses[] = json_decode($response->getBody()->getContents(), true);
    
            return $this->response->setJSON([
                'status' => 'success',
                'data' => $responses
            ]);
            
        } catch (\GuzzleHttp\Exception\RequestException $e) {
            return $this->response->setJSON([
                'status' => 'error',
                'message' => $e->getMessage()
            ]);
        }
    }
}
