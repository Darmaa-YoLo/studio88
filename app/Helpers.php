<?php

use Illuminate\Support\Str;

function snakeCaseKeys(array $data)
{
    $array = [];
    foreach ($data as $key => $value) {
        if (is_array($value)) {
            $value = snakeCaseKeys($value);
        }
        $array[Str::snake($key)] = $value;
    }
    return $array;
}
