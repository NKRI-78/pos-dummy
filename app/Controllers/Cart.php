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
                "price" => 10000,
                "image" => "https://upload.wikimedia.org/wikipedia/commons/4/43/Javaen_barb.jpg"
            ],
            [
                "id" => "2",
                "name" => "Ayam",
                "price" => 15000,
                "image" => "https://foto.kontan.co.id/FgVyravDpc8WNfTrxyfGlz1oaFY=/640x360/smart/2022/10/13/271827161p.jpg"
            ],
            [
                "id" => "3",
                "name" => "Sapi",
                "price" => 25000,
                "image" => "https://res.cloudinary.com/dk0z4ums3/image/upload/v1605524896/attached_image/mengolah-daging-sapi-dengan-benar.jpg"
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
            "price" => $item['price'],
            "image" => $item['image']
        ];

        return view('cart/index', $data);
    }
}
