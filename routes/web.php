<?php

use App\User;

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

Route::get('/lista', 'TicketController@index')->name('ticket.index');

Route::post('/deleteTicket/{id}', 'TicketController@destroy')->name('ticket.delete');


//testar a funcionalidade role_user

/*Route::get('/user/{id}/role', function($id){
	$user = User::find($id)->roles()->orderBy('id','desc')->get();

	return $user[0]->name;

});*/

Route::group(['middleware'=>'web'], function(){

	Route::resource('/posts', 'TicketController');

});
