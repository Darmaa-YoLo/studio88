<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;

class ClientController extends BaseController
{
    public function __construct(Client $client)
    {
        $this->model = $client;
        $this->rules = [
            'name' => 'required|string|max:255',
            'logo' => 'required|string|max:255',
        ];
    }
}
