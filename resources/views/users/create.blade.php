@extends('layout')

@section('contenido')

<h1>Crer nuevo usuario</h1>

  <form method="POST" action=" {{ route('usuarios.store') }} " accept-charset="utf-8">
		
		@include('users.form',[ 'user' => new App\User ])

		<input  class="btn btn-primary" type="submit" value="Guardar">

	</form>

@endsection