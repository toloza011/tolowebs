<?php

use Illuminate\Support\Facades\Route;


//----------------Home-------------//

Route::get('/','HomeController@home')->name('home');
Route::get('/contacto','HomeController@contacto')->name('contacto');
Route::post('/enviarContacto','HomeController@enviarContacto')->name('correo');


//----------------/Home-------------//