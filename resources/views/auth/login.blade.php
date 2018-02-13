@extends('layout')

@section('contenido')
<h1>Login</h1>
	
	<form class="form-inline" action="/login" method="POST" accept-charset="utf-8">
		{!! csrf_field() !!}
		<input class="form-control" type="email" name="email" placeholder="Email">
		<input class="form-control" type="password" name="password" placeholder="Password">
		<input class="btn btn-primary" type="submit" value="Entrar">
	</form>

@stop
