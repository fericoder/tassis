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
    return view('index');
});
Route::get('about', function () {
    return view('about');
});
Route::get('alo', function () {
    return view('alo');
});
Route::get('partners', function () {
    return view('partners');
});

Route::get('resume', function () {
    return view('resume');
});


Route::get('contact', function () {
    return view('contact');
});
Route::get('blogs.show', function () {
    return view('blogs.show');
});
Route::get('blogs.index', function () {
    return view('blogs.index');
});
Route::get('SettingUp', function () {
    return view('SettingUp');
});
Route::get('Technology', function () {
    return view('Technology');
});
Route::get('Live', function () {
    return view('Live');
});
Route::get('General', function () {
    return view('General');
});
