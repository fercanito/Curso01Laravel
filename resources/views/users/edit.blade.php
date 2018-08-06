@extends('layout')

@section('contenido')
<h1>Editar usuario</h1>
@if (session()->has('info'))
   <div class="alert alert-success">
      {{ session('info') }}
  </div>

@endif
<form method="POST" action=" {{ route('usuarios.update' , $user->id) }} " accept-charset="utf-8">

		{!! method_field('PUT') !!}

		{!! csrf_field() !!}
		<p> <label for="nombre">
			Nombre
			<input type="text" class="form-control" name="name" value="{{ $user->name }}">
			{!! $errors->first('name','<span class=error>:message</span>') !!}
		</label></p>

		<p> <label for="email">
			Email
			<input type="text" class="form-control" name="email" value="{{ $user->email }}">
			{!! $errors->first('email','<span class=error>:message</span>') !!}
		</label></p>

	

		<input  class="btn btn-primary" type="submit" value="Enviar">

	</form>
@stop