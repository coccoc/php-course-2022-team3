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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

// Route::prefix('api')->group(function(){
//     Route::get('/demoApi','API\APIProductController@index');
// });

$router->group([
    // 'prefix' => 'api',
    // 'namespace' => 'v1',
     //'middleware' => ['auth'],
], function ($router) {
    $router->get('/demoApi/addData','AdminRequestController@admin');
    $router->get('/demoApi','API\APIProductController@index');
    $router->post('/demoApi','API\APIProductController@store');
    $router->put('/demoApi/{id}','API\APIProductController@update');
    $router->delete('/demoApi/{id}','API\APIProductController@destroy');
});