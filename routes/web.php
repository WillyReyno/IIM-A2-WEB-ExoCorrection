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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/iim', function() {
    return view('iim');
});

Route::get('/iim/{param}', function($param) {
   return view('param', compact('param'));
});

Route::get('/page1', function() {
    return view('page1');
});

Route::get('/page2', function() {
    return view('page2');
});