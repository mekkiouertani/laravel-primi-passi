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

Route::get('/home', function () {
    return view('home');
})->name('home');

Route::get('/main', function () {
    $name = 'Bojack';
    $surname = 'Horseman';
    return view('pages.main', compact('name', 'surname'));
})->name('main');

Route::get('/info', function () {
    return view('pages.info');
})->name('info');
