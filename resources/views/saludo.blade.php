@extends('layout')

@section('contenido')

	<h1>Saludos para {{ $nombre }}</h1>
	{{-- {!! $html !!}
	{{  $script }} --}}

	{{-- Foreach bascio
	@foreach ($consolas as $consola)		
		<li>{{ $consola }}</li>
	@endforeach --}}

	{{-- Foreach si el array esta vacio --}}
	@forelse($consolas as $consola)
	<li>{{ $consola }}</li>
	@empty
		<p>No hay consolas :(</p>
	@endforelse

	@if (count($consolas) === 1)
		<p>Solo tienes un consola</p>
	@elseif(count($consolas) > 1)
		<p>Tienes varias consolas</p>
	@else
		<p>No tienes ninguna consola</p>
	@endif

@stop