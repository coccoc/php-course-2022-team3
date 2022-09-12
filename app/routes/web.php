<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/adminA', function () {
    return view('AdminFetch');
});


// Route::prefix('api')->group(function(){
//     Route::get('/demoApi/addData','AdminRequestController@admin');
//     Route::get('/demoApi','API\APIProductController@index');
//     Route::post('/demoApi','API\APIProductController@store');
//     Route::put('/demoApi/{id}','API\APIProductController@update');
//     Route::delete('/demoApi/{id}','API\APIProductController@destroy');
// });

