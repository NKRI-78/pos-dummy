<?php

namespace App\Controllers;

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
}
