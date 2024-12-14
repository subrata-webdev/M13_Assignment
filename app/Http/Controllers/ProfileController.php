<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index($id)
    {
        $name = "Donald Trump";
        $age = "75";
        $data = [
            'id' => $id,
            'name' => $name,
            'age' => $age,
        ];
        $status_code = 200;
        $token_name = 'access_token';
        $access_token_value = "123-XYZ";
        $minutes = 1;
        $path = '/';
        $domain = $_SERVER['SERVER_NAME'];
        $secure = false;
        $httpOnly = true;
        $response = response($data, $status_code);
        $response->cookie($token_name, $access_token_value, $minutes, $path, $domain, $secure, $httpOnly);
        return $response;

    }
}
