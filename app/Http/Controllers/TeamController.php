<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Team;

class TeamController extends BaseController
{
    public function __construct(Team $team)
    {
        $this->model = $team;
        $this->rules = [
            'name' => 'required|string|max:255',
            'role' => 'required|string|max:255',
            'image' => 'required|string|max:255',
        ];
    }
}
