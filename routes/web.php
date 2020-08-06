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

Route::get('/me', function () {
    return ['NIS'=> '3103118087',
    'Nama' => 'Maulana Reza Alghifar',
    'Gender' => 'Laki-laki',
    'Phone' =>'081246374133',
    'Class' =>'XII RPL 3'];
});

Route::get('auth','AuthController@me');
