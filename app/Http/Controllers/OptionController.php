<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Option;

class OptionController extends Controller
{
    public function show()
    {
        $data = Option::all();

        return response()->json([
            'data' => $data
        ]);
    }

    public function update(Request $request)
    {
        $datas = Option::all();
        $test = array();

        foreach ($datas as $data) {
            if($request->input($data->name)) {
                $data->value = $request->input($data->name);
                $data->save();
            }
        }

        return response()->json([
            'success' => $test,
        ]);
    }
}
