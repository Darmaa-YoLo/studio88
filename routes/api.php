<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::namespace('Auth')->group(function () {
    Route::post('login', 'LoginController@login');
});

$modules = [
    'users' => 'UserController',
    'works' => 'WorkController',
    'clients' => 'ClientController',
    'team' => 'TeamController',
    'trackers' => 'TrackerController',
    'filter' => 'FilterController',
    'about'=>'AboutController'
];

Route::middleware('auth:sanctum')->group(function () use ($modules) {
    Route::apiResources($modules);
    Route::post('upload/image', 'ImageController@uploadImage');
    Route::post('upload/video', 'VideoController@uploadVideo');
    Route::get('option', 'OptionController@show');
    Route::put('option', 'OptionController@update');
});

foreach ($modules as $route => $controller) {
    Route::post($route . '/mass/destroy', $controller . '@massDestroy');
}
