<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\CreateMessageRequest;
//use App\Http\Request\CreateMessageRequest;


class PagesController extends Controller
{

  public function __construct()

  {
    
    //$this->middleware('example',[ 'only' => ['home'] ]);
    //$this->middleware('example');
    //$this->middleware('example',[ 'except' => ['home'] ]);

  }

  public function home()

  {
  	
  	return view('home');
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
