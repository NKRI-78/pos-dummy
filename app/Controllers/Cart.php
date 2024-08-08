<?php

namespace App\Controllers;

use App\Controllers\Base;

class Cart extends BaseController
{
    public function index($id)
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

        return view('cart/index', $data);
    }
}
