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


Route::get('/',['as' => 'home', 'uses' => 'PagesController@home' ]);
Route::get('contactame',['as' => 'contactos', 'uses' => 'PagesController@contact' ]);
Route::post('contacto', 'PagesController@mensajes' );
Route::get('saludos/{nombre?}',['as' => 'saludos', 'uses' => 'PagesController@saludo'])->where('nombre',"[A-Za-z]+");


//Implementacion de arquitectura REpresentational state transfer  REST
Route::get('mensajes',['as' => 'messages.index', 'uses' => 'MessagesController@index']);
Route::get('mensajes/create',['as' => 'messages.create', 'uses' => 'MessagesController@create']);
Route::post('mensajes',['as' => 'messages.store', 'uses' => 'MessagesController@store']);

