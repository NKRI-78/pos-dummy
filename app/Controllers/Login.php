<?php

namespace App\Controllers;

use App\Controllers\Base;

use Config\Services;
use GuzzleHttp\Client;

class Login extends BaseController
{
    public function login()
    {
        return view('auth/login');
    }

    public function store()
    {
        $data = array();
        $request = Services::request();
        $session = Services::session();

        $email = $request->getPost('email');
        $password = $request->getPost('password');

        $client = new Client([\GuzzleHttp\RequestOptions::VERIFY  => false]);

        $payloads = array(
            'email' => $email,
            'password' => $password
        );

        try {
            $url = getenv('API_URL') . '/api/v1/auth/login';

            $req = $client->post($url, [
                'headers' => ['Content-Type' => 'application/json', 'Accept' => 'application/json'],
                'body'    => json_encode($payloads)
            ]);

            // var_dump('tes'); die;
            $response = $req->getBody()->getContents();
            $result = json_decode($response);

            $data = array();
            $data["token"] = $result->data->token;
            $data["user_id"] = $result->data->id;
            $data["name"] = $result->data->username;
            $data["email"] = $result->data->email;
            $data["phone"] = $result->data->phone;
            $data["authenticated"] = true;

            $session->set($data);

            // // Set flash data for success
            $session->setFlashdata('success', 'Login successful!');

            return redirect()->to(base_url('ChatBox/index'));
        } catch (\Exception $e) {
            var_dump('tes'); die;
            // Set flash data for error
            // $session->setFlashdata('error', 'Username or password is incorrect.');

            return redirect()->to(base_url('auth/login'));
        }
    }

    public function register()
    {
        return view('auth/register');
    }

    public function postRegister()
    {
        $client = new \GuzzleHttp\Client(['verify' => false]);
        $session = Services::session();
        $request = Services::request();

        $username = $request->getPost('name');
        $email = $request->getPost('email');
        $password = $request->getPost('password');
        $phone = $request->getPost('telp');

        if (strlen($phone) < 11 || strlen($phone) > 12) {
            $session->setFlashdata('error', 'Nomor telepon harus memiliki panjang antara 11 dan 12 digit.');
            return redirect()->back()->withInput();
        }

        $payloads = [
            "username" => $username,
            "email" => $email,
            "password" => $password,
            "phone" => $phone,
        ];

        $url = getenv('API_URL') . '/api/v1/auth/register';

        $req = $client->post(
            $url,
            [
                'body' => json_encode($payloads),
                'headers' =>  [
                    'Content-type'  => 'application/json',
                    'Accept' => 'application/json'
                ],
            ]
        );

        $session->setFlashdata('success', 'Registration successful! Please login.');

        return redirect()->to(base_url('auth/login'));
    }
}
