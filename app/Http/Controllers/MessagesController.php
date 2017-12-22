<?php

namespace App\Http\Controllers;

use DB;
use App\Message;
use Carbon\Carbon;
use Illuminate\Http\Request;

class MessagesController extends Controller
{

    function __construct()
    {
      //Esta definicion aplica para todos los metodos
      //$this->middleware('auth');

      //Se deben indicar todos los metodos que pertenescan a un mismo flujo
      $this->middleware('auth',[ 'except' => ['create' , 'store' ] ]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      
      $messages = Message::all();

      return view('messages.index' , compact('messages'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('messages.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      //QUERY BUILDER
      /*DB::table('messages')->insert([
        "nombre" => $request->input('nombre'),
        "email" => $request->input('email'),
        "mensaje" => $request->input('mensaje'),
        "created_at" => Carbon::now(),
        "updated_at" => Carbon::now(),
      ]);*/

      //ELOQUENT - forma 1
      /*$message = new Message;
      $message->nombre = $request->input('nombre');
      $message->email = $request->input('email');
      $message->mensaje = $request->input('mensaje');
      $message->save();*/

      //ELOQUENT - forma 2
      /*Message::create([
        "nombre" => $request->input('nombre'),
        "email" => $request->input('email'),
        "mensaje" => $request->input('mensaje'),
      ]);*/

      //ELOQUENT - forma 3
      /*Message::create([
        "nombre" => $request->input('nombre'),
        "email" => $request->input('email'),
        "mensaje" => $request->input('mensaje'),
      ]);*/

      //ELOQUENT - forma 4
      Message::create($request->all());

        return redirect()->route('mensajes.create')
                         ->with('info','Hemos recibido tu mensaje');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      //QUERY BUILDER
      //$message = DB::table('messages')->where('id', $id)->first();

      //ELOQUENT
      $message = Message::findOrFail($id);

      return view('messages.show', compact('message'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      //QUERY BUILDER
      $message = DB::table('messages')->where('id', $id)->first();

      //ELOQUENT
      $message = Message::findOrFail($id);

      return view('messages.edit', compact('message'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
      //QUERY BUILDER
      /*DB::table('messages')->where('id' ,$id)->update([
          "nombre" => $request->input('nombre'),
          "email" => $request->input('email'),
          "mensaje" => $request->input('mensaje'),
          "updated_at" => Carbon::now(),
        ]);*/

      //ELOQUENT - forma 1
        /*$message = Message::findOrFail($id);
        $message->update($request->all());*/

      //ELOQUENT - forma 2
      $message = Message::findOrFail($id)->update($request->all());


      return redirect()->route('mensajes.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    { 
      //QUERY BUILDER
      //DB::table('messages')->where('id', $id)->delete();

      //ELOQUENT
        Message::findOrFail($id)->delete();

       return redirect()->route('mensajes.index');
    }
}
