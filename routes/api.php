<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Dingo\Api\Facade\API;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
$api = app('Dingo\Api\Routing\Router');
$api->version('v1', function ($api) {
    //tempat end-point yang akan didefinisikan
});
$api->version(
    'v1',
    ['namespace' => 'App\Http\Controllers'],
    function ($api) {
        $api->get('users', 'APIUserController@index');
        $api->post('users', 'APIUserController@store');
        $api->put('users/{id}', 'APIUserController@update');
        $api->delete('users/{id}', 'APIUserController@delete');
    }
);
