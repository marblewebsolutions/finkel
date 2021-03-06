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

Route::get('/', 'PageController@index');
Route::get('shop', 'PageController@shop');
Route::get('link2fink', 'PageController@linkinbio');
Route::get('privacy', 'PageController@privacy');

// Route::get('/digs', 'PageController@digs');
// Route::get('/music-media', 'PageController@musicMedia');
// Route::get('/story', 'PageController@story');

// Route::post('/', 'PageController@setStatic');
// Route::post('/music-media', 'PageController@mail');
