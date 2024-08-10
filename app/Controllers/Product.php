<?php

namespace App\Controllers;

use GuzzleHttp\Client;

use App\Controllers\Base;

class Product extends BaseController
{
    
    public function detail($id): string
    {
        try {
            $postData = [
                'cat_id' => $id,          
            ];
            
            $client = new Client();
            $response = $client->request('POST', 'https://api-hp3ki.inovatiftujuh8.com/api/v1/admin/catalog-pos',
                [
                    'json' => $postData,
                    'headers' => [
                        'Content-Type' => 'application/json',
                    ]
                ]
            );
            
            $data = json_decode($response->getBody(), true);

            return view('product/detail', ["data" =>  $data["data"]]);

        } catch (\GuzzleHttp\Exception\RequestException $e) {
            return $this->response->setJSON([
                'status' => 'error',
                'message' => $e->getMessage()
            ]);
        }
    } 
    
}
