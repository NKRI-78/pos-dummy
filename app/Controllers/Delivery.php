<?php

namespace App\Controllers;

class Delivery extends BaseController
{
    public function index(): string
    {
        return view('delivery/index');
    }
}
