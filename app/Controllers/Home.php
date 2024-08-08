<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        return view('home/index');
    }
    
    public function refferal($refferal)
    {
        $refferal = encode('reff17432200');

        $decodedString = decode($refferal);
        
        if($refferal == "reff17432200") {
            return redirect()->to('https://api.whatsapp.com/send?phone=+6285212131890&text=Loker-fre71f223400');
        } else {
            return redirect()->to('https://tentangloker.com');
        }
    }
}
