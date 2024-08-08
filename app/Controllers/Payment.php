<?php

namespace App\Controllers;

use App\Controllers\Base;

class Payment extends BaseController
{
    public function index($id): string
    {
        
        return view('shipping/index');
    }
}
