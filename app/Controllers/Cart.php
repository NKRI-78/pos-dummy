<?php

namespace App\Controllers;

use App\Controllers\Base;

class Cart extends BaseController
{
    public function index($id)
    {
        $items = [
            [
                "id" => "1",
                "name" => "Ikan",
                "image" => "https://upload.wikimedia.org/wikipedia/commons/4/43/Javaen_barb.jpg"
            ],
            [
                "id" => "2",
                "name" => "Ayam",
                "image" => "https://upload.wikimedia.org/wikipedia/commons/6/65/Chicken.jpg"
            ],
            [
                "id" => "3",
                "name" => "Sapi",
                "image" => "https://upload.wikimedia.org/wikipedia/commons/1/16/Cow_female_black_white.jpg"
            ]
        ];

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
            "image" => $item['image']
        ];

        return view('cart/index', $data);
    }
}
