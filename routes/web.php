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
    $data=[
        'users'=>[
                    ['name'=>'Pippo',
                    'surname'=>'Franco'],
                    ['name'=>'Ciccio',
                    'surname'=>'Rossi'],
                ]
        ];

    return view('home', $data);
})->name('home');

Route::get('/about-us', function () {
    $data=[
        'users'=>[
                    ['name'=>'Gino',
                    'surname'=>'Paoli',
                    'role'=>'CEO'],
                    ['name'=>'Paolo',
                    'surname'=>'Rossi',
                    'role'=>'Co-Founder'],
                ]
        ];

    return view('about-us', $data);
})->name('about-us'); 
