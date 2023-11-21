<?php

namespace Domain;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class BaseAction
{
    protected array $data = [];

    public function fromData(array $data)
    {
        $this->data = $data;

        return $this;
    }

    public function token(Request $request)
    {
        $data = [
            'scope' => '*',
            'grant_type' => 'password',
            'client_id' => env('CLIENT_ID'),
            'client_secret' => env('CLIENT_SECRET'),
            'username' => $request->input('username'),
            'password' => $request->input('password'),
        ];

        $login = Http::post(env('BASE_URL') . '/oauth/token', $data);

        return json_decode($login)->access_token;
    }
}
