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

Route::get('home',['as' => 'home', function($nombre = "Invitado") {
  	
  return view('home');

}]);

Route::get('contactame',['as' => 'contactos', function($nombre = "Invitado") {
  	
  return view('contactos');

}]);

Route::get('saludos/{nombre?}',['as' => 'saludos', function($nombre = "Invitado") {
  	
  $html = "<h2>Contenido</h2>";//ingresado por formulario
  $script = "<script>alert('Problema XSS - Cross Site Scripting¡')</script>";//ingresado por formulario

  $consolas = [

  	/*"Play Station 4",
  	"Xbox One",*/
  	// "Wii U"

  ];

  return view('saludo',compact('nombre','html','script','consolas'));

}])->where('nombre',"[A-Za-z]+");