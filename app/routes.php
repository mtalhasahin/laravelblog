<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/




/*Ön Kısım Rotasyonları*/
Route::get('/', function()
{
	return View::make('hello');
});

Route::get('admin','Backend_LoginController@login');
Route::post('adminpost','Backend_LoginController@loginpost');
Route::get('logout','Backend_LoginController@logout');





/*Admin Kısmı Rotasyonları*/
Route::controller('panel','Backend_PanelController');


