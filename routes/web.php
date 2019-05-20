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
    return view('home');
});

Route::get('/cadastrar', function () {
    return view('pages/cadastrar');
})->name('cadastrar.index');

Route::post('/addPassenger', 'PassengerController@store')->name('passenger.store');

Route::get('/lista', 'PassengerController@index')->name('passenger.index');

//Route::get('/delete', 'PassengerController@destroy')->name('passenger.destroy');