<?php

use Illuminate\Support\Facades\Route;


//----------------Home-------------//

Route::get('/home','HomeController@home')->name('home');
Route::get('/contacto','HomeController@contacto')->name('contacto');
Route::post('/enviarContacto','HomeController@enviarContacto')->name('correo');

//----------------/Home-------------//

//---------------Planes-------------//

Route::get('/Plan/{id}','PlanController@inscripcion')->name('plan');
Route::post('Plan/{id}','PlanController@contratar')->name('contratar');

//---------------/Planes-------------//


Auth::routes();

Route::get('/home', 'HomeController@home');