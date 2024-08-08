<?php

namespace App\Controllers;

use App\Controllers\Base;

class Shipping extends BaseController
{
    public function index($id): string
    {
        
        $items = dataProduct();

        $item = null;
        foreach ($items as $i) {
            if ($i['id'] == $id) {
                $item = $i;
                break;
            }
        }

        $data = [
            "id" => $item['id'],
            "name" => $item['name'],
            "price" => $item['price'],
            "image" => $item['image']
        ];

        return view('shipping/index', $data);
    }
}
