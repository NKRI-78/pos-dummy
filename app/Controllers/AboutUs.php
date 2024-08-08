<?php

namespace App\Controllers;

use App\Controllers\Base;

class AboutUs extends BaseController
{
    public function index(): string
    {
        return view('aboutus/index');
    }
}
