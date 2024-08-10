<?php

namespace App\Controllers;

use GuzzleHttp\Client;

use App\Controllers\Base;

class Shipping extends BaseController
{
    
    public function index(): string
    {

        $client = new Client();
        $response = $client->request('POST', 'https://api-hp3ki.inovatiftujuh8.com/api/v1/admin/order-pos');
         
        $data = json_decode($response->getBody(), true);

        $totalPrice = $data["data"]["order"]["total_price"];

        $products = $data["data"]["products"];

        return view('shipping/index', [
            "products" => $products,
            "total_price" => $totalPrice
        ]);
    }

    public function savePersonalInfo() 
    {  
        $session = session();

        if ($this->request->getMethod() === 'post') {
            
            $fullname = $this->request->getPost('fullname');
            $phone = $this->request->getPost('phone');
            $address = $this->request->getPost('address');

            $session->set('fullname', $fullname);
            $session->set('phone', $phone);
            $session->set('address', $address);
        }

        return $this->response->setJSON(['status' => 200, 'message' => 'Ok.']);
    }

}
