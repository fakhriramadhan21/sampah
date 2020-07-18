<?php

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

// Route::get('/', function () {
//     return view('input');
// });
Route::group(array('prefix' => '/'), function()
{
    Route::get('/', 'SampahController@input');
    Route::get('/data', 'SampahController@list');
    Route::get('/delete/{id}', 'SampahController@delete');
    Route::post('/prosesInput', 'SampahController@proses');
});
Route::group(array('prefix' => 'API'), function()
{
    Route::post('/input', 'APIController@input');
    Route::get('/getAll', 'APIController@getAll');
    Route::get('/getSpecific/{id}', 'APIController@getSpecific');
    Route::get('/delete/{id}', 'APIController@delete');
});

// Route::get('/data', function () {
//     return view('data');
// });
