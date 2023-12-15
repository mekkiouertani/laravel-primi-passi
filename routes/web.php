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
    return view('home');
});

Route::get('/main', function () {
    $name = 'Bojack';
    $surname = 'Horseman';
    return view('pages.main', compact('name', 'surname'));
})->name('main');

Route::get('/info', function () {
    $data = [
        'name' => 'Bojack',
        'surname' => 'Horseman',
        'address' => 'Hollywoo',
        'number' => '1',
        'city' => 'Los Angeles',
        'state' => 'California',
        'zip' => '90001',
        'phone' => '555-555-5555',
    ];
    return view('pages.info', $data);
})->name('info');
