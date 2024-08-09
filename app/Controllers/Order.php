<?php

namespace App\Controllers;

use GuzzleHttp\Client;

use App\Controllers\Base;

class Order extends BaseController
{
    public function index()
    {
        // $items = dataProduct();

        // $item = null;
        // foreach ($items as $i) {
            // if ($i['id'] == $id) {
                // $item = $i;
                // break;
            // }
        // }

        // $data = [
        //     // "id" => $item['id'],
        //     // "name" => $item['name'],
        //     // "price" => $item['price'],
        //     // "image" => $item['image']
        // ];

        $client = new Client();
        $response = $client->request('POST', 'https://api-hp3ki.inovatiftujuh8.com/api/v1/admin/order-pos');
         
        $data = json_decode($response->getBody(), true);

        return view('order/index', ['data' => $data["data"]]);
    }
}
