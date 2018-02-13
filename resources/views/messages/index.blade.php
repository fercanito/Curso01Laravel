@extends('layout')

@section('contenido')
<h1>Todos los mensajes</h1>

<table class="table">
	<thead>
		<tr>
			<th>Nombre</th>
			<th>Email</th>
			<th>Mensaje</th>
			<th>Acciones</th>
		</tr>
	</thead>
	<tbody>

		@forelse($messages as $message)
		<tr>
			<td>
				<a href="{{ route('mensajes.show' , $message->id) }}">{{  $message->nombre  }}</a>
			</td>
			<td>{{  $message->email   }}</td>
			<td>{{  $message->mensaje }}</td>
			<th>
				<a href="{{ route('mensajes.edit' , $message->id) }} " class="btn btn-info btn-xs">Editar</a>
				<form style="display: inline;" method="POST" action="{{ route('mensajes.destroy', $message->id) }}" accept-charset="utf-8">
					{!! method_field('DELETE') !!}
					{!! csrf_field() !!}
					<button class="btn btn-danger btn-xs" type="submit">Eliminar</button>
				</form>
			</th>
			
		</tr>
		@empty
			<p>No hay mensajes :(</p>
		@endforelse

		
	</tbody>
</table>

@stop