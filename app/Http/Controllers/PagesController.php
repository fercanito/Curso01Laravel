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

  public function contact()

  {
  	
  	return view('contactos');
  
  }

  
  public function mensajes(CreateMessageRequest $request) //request con clase
  {

    /*$data = $request->all(); //datos del formulario
    return response()->json([
      'data' => $data
    ],200)
    ->header('TOKEN', 'secret');*/

    $data = $request->all();

   /* return redirect()
            ->route('contactos')
            ->with('info','Tu mensaje a sido enviado correctamente');*/

    //back() se utiliza para volver a la vista anterior
     return back()->with('info','Tu mensaje a sido enviado correctamente');

    
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
