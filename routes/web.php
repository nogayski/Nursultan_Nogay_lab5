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

Route::get('/name', function () {
    return view('name',["name"=>"Arman"]);
});

Route::get('/date', function () {
    return view('date')->with("date","01-01-1999");
});

Route::get('/age/{name}', function ($name) {
    return view('age',compact('name'));
});