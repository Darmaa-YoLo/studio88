<?php

namespace App\Http\Controllers;

use App\Models\About;
use Illuminate\Http\Request;

class AboutController extends BaseController
{
    public function __construct(About $about)
    {
        $this->model = $about;
        $this->rules = [
            'image' => 'required|string|max:255',
        ];
    }
}
