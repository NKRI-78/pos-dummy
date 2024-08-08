<?php

namespace App\Controllers;

use App\Controllers\Base;

use Config\Services;
use GuzzleHttp\Client;

class ChatBox extends BaseController
{
    public function index()
    {
        $session = Services::session();
        $client = new Client([\GuzzleHttp\RequestOptions::VERIFY  => false]);

        $token = $session->get('token');

        try {

            $url = getenv('API_URL') . '/api/v1/chat/message';
            $req = $client->get($url, [
                'headers' => ['Content-Type' => 'application/json', 'Accept' => 'application/json', 'Authorization' => 'Bearer ' . $token],
            ]);

            $response = $req->getBody()->getContents();
            $result = json_decode($response);

            $data['messageItems'] = $result->data;
            
            return view('chatbox/index', $data);
        } catch (\Exception $e) {
            return view('auth/login');
        }

    }
}
 