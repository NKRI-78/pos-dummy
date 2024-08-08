<?php

namespace App\Controllers;

use App\Controllers\Base;

class Order extends BaseController
{
    public function index(): string
    {
        return view('order/index');
    }
}
