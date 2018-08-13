@extends('layout')

@section('contenido')
	<h2>Editar mensaje de {{ $message->nombre }}</h2>
@if (session()->has('info'))
	<h3>{{ session('info') }}</h3>
@else
	<form method="POST" action=" {{ route('mensajes.update' , $message->id) }} " accept-charset="utf-8">

		{!! method_field('PUT') !!}
		@include('messages.form',['btnText' => 'Actualizar'])

	</form>
	@endif
@stop