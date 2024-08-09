<?php

namespace App\Controllers;

use App\Controllers\Base;

class Shipping extends BaseController
{
    
    public function index(): string
    {
        return view('shipping/index');
    }

    public function savePersonalInfo() 
    {  
        $session = session();

        if ($this->request->getMethod() === 'post') {
            
            $fullname = $this->request->getPost('fullname');
            $phone = $this->request->getPost('phone');
            $address = $this->request->getPost('address');

            $session->set('fullname', $fullname);
            $session->set('phone', $phone);
            $session->set('address', $address);

        }

        return $this->response->setJSON(['status' => 200, 'message' => 'Ok.']);
    }

}
