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

//action login
Route::get('/', function () {
  return view('login');
});

//action register
Route::get('/register', function () {
  return view('register');
});

//action Index
Route::get('/index', function () {
  return view('index');
});

//action entribaru masuk
Route::get('/entrimasuk', function () {
    return view('entrimasuk');
});

//action suratmasuk
Route::get('/suratmasuk', function () {
    return view('suratmasuk');
});

//action entribaru keluar
Route::get('/entrikeluar', function () {
    return view('entrikeluar');
});

//action suratkeluar
Route::get('/suratkeluar', function () {
    return view('suratkeluar');
});

//store register
Route::post('/register', 'register@storeregister');

//Login post
Route::post('/login', 'login@trylogin');
