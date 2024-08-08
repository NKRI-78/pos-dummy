<?php

namespace App\Controllers;

use App\Controllers\Base;

class Checkout extends BaseController
{
    public function index($id)
    {
        return view('checkout/index');
    }
}
