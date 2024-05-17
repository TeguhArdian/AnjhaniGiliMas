<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('Home', [
        "title" => "Home"

    ]);
});

Route::get('/layanan', function () {
    return view('Layanan', [
        "title" => "Layanan"

    ]);
});

Route::get('/about', function () {
    return view('About', [
        "title" => "About"

    ]);
});

Route::get('/transfer', function () {
    return view('Transfer', [
        "title" => "Transfer"

    ]);
});

Route::get('/fullday', function () {
    return view('Fullday', [
        "title" => "Full Day"

    ]);
});