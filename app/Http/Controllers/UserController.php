<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserController extends BaseController
{
    public function __construct(User $user)
    {
        $this->model = $user;
        $this->rules = [
            'email' => 'required|string|max:255',
            'password' => 'required|string|max:255',
        ];
    }

    /**
     * Request parameters.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    protected function requestParams(Request $request)
    {
        $data = $request->only([
            'name', 'email', 'isAdmin',
        ]);

        if ($request->filled('password')) {
            $data = array_merge($data, [
                'password' => Hash::make($request->input('password')),
            ]);
        }

        return $data;
    }
}
