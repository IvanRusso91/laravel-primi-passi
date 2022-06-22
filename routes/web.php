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

    $saluto = 'Hello i am Laravel!!';

    $data = [
        'saluto'=> $saluto,

    ];

    return view('home', $data);

})->name('home');

Route::get('/indovinello',function (){


    $domanda_1 = 'Io sono il desiderio degli uomini felici.';
    $domanda_2 = 'Chi la fa, la vende. Chi la compra non la adopera; chi la usa non la vede. Che cosa?';
    $domanda_3 = 'Si saluta quando si alza.';

    $data =[
        'domanda_1'=> $domanda_1,
        'domanda_2'=> $domanda_2,
        'domanda_3'=> $domanda_3,
    ];

    return view('indovinello', $data);

})->name('indovinello');


Route::get('/primo',function (){

    return view('primo');

})->name('primo');

Route::get('/secondo', function (){

    return view('secondo');

})->name('secondo');

Route::get('/terzo', function () {

    return view('terzo');

})->name('terzo');
