<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\CreateMessageRequest;
//use App\Http\Request\CreateMessageRequest;


class PagesController extends Controller
{
  public function home()

  {
  	
  	return view('home');

  }

  public function contact()

  {
  	
  	return view('contactos');
  
  }

  //public function mensajes(Request $request) request normal
  public function mensajes(CreateMessageRequest $request) //request con clase
  {
    //Para formularios con pocos campos no hay problema en hacer la validacion directamente en el controlador
    //para muchos campos se recomienda crear un archivo "Request" con el comando
    //php artisan make:request CreateMessageRequest
    /*$this->validate($request,[

      'nombre'  => 'required',
      'email'   => 'required|email',
      'mensaje' => 'required|min:5'

    ]);*/
    return $request->all(); //datos del formulario
    
  }

  public function saludo($nombre = "Invitado")

  {
  	
  	$html = "<h2>Contenido</h2>";//ingresado por formulario
	  $script = "<script>alert('Problema XSS - Cross Site Scripting¡')</script>";//ingresado por formulario

	  $consolas = [

	  	/*"Play Station 4",
	  	"Xbox One",*/
	  	// "Wii U"

	  ];

	  return view('saludo',compact('nombre','html','script','consolas'));
  
  }

}
