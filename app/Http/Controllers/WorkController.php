<?php

namespace App\Http\Controllers;

use App\Models\Work;
use Illuminate\Http\Request;

class WorkController extends BaseController
{
    public function __construct(Work $work)
    {
        $this->model = $work;
        $this->rules = [
            'name' => 'required|string|max:255',
            'type' => 'required|string',
            'video' => 'required|string|max:255',
            
        ];
    }
}
