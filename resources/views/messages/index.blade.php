@extends('layout')

@section('contenido')
<h1>Todos los mensajes</h1>

<table width="100%" border="1">
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
				<a href="{{ route('messages.show' , $message->id) }}">{{  $message->nombre  }}</a>
			</td>
			<td>{{  $message->email   }}</td>
			<td>{{  $message->mensaje }}</td>
			<th>
				<a href=" {{ route('messages.edit' , $message->id) }} ">Editar</a>
				<form style="display: inline;" method="POST" action="{{ route('messages.destroy', $message->id) }}" accept-charset="utf-8">
					{!! method_field('DELETE') !!}
					{!! csrf_field() !!}
					<button type="submit">Eliminar</button>
				</form>
			</th>
			
		</tr>
		@empty
			<p>No hay mensajes :(</p>
		@endforelse

		
	</tbody>
</table>

@stop