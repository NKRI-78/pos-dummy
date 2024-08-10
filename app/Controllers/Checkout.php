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

        $client = new Client();
        $response = $client->request('POST', 'https://api-hp3ki.inovatiftujuh8.com/api/v1/admin/order-pos');
         
        $data = json_decode($response->getBody(), true);

        $totalPrice = $data["data"]["order"]["total_price"];

        $products = $data["data"]["products"];

        return view('checkout/index', [
            'fullname' => $fullname,
            'phone' => $phone,
            'address' => $address,
            'products' => $products
        ]);
    }

    public function addToCart()
    {
        $catId = $this->request->getPost('cat_id');
    
        $client = new \GuzzleHttp\Client();
    
        try {
            $postData = [
                'cat_id' => $catId,          
            ];

            $response = $client->request('POST', 'https://api-hp3ki.inovatiftujuh8.com/api/v1/admin/add-cart-pos', [
                'json' => $postData,
                'headers' => [
                    'Content-Type' => 'application/json',
                ]
            ]);

            $responseData = json_decode($response->getBody()->getContents(), true);
    
            return $this->response->setJSON([
                'status' => 'success',
                'data' => $responseData
            ]);
            
        } catch (\GuzzleHttp\Exception\RequestException $e) {
            return $this->response->setJSON([
                'status' => 'error',
                'message' => $e->getMessage()
            ]);
        }
    } 

    public function checkoutOrder()
    {
        $data = $this->request->getPost('data');
        $totalQty = $this->request->getPost('total_qty');
        $totalPrice = $this->request->getPost('total_price');
    
        $client = new \GuzzleHttp\Client();
    
        try {
            $postData = [
                'cat_id' => $data,          
                'total_qty' => (int) $totalQty,
                'total_price' => (int) $totalPrice,
            ];

            $response = $client->request('POST', 'https://api-hp3ki.inovatiftujuh8.com/api/v1/admin/insert-order-pos', [
                'json' => $postData,
                'headers' => [
                    'Content-Type' => 'application/json',
                ]
            ]);

            $responseData = json_decode($response->getBody()->getContents(), true);
    
            return $this->response->setJSON([
                'status' => 'success',
                'data' => $responseData
            ]);
            
        } catch (\GuzzleHttp\Exception\RequestException $e) {
            return $this->response->setJSON([
                'status' => 'error',
                'message' => $e->getMessage()
            ]);
        }
    }
}
