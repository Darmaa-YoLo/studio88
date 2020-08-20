<?php

namespace App\Http\Controllers;

use App\Models\Filter;
use Illuminate\Http\Request;

class FilterController extends BaseController
{
    public function __construct(Filter $filter)
    {
        $this->model = $filter;
        $this->rules = [
            'name' => 'required|string|max:255',
            
        ];
    }
}
