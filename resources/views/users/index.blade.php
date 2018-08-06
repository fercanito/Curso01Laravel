@extends('layout')

@section('contenido')

<h1>Usuarios</h1>

<table class="table">
	<thead>
		<tr>
      <th>ID</th>
			<th>Nombre</th>
			<th>Email</th>
			<th>Rol</th>
			<th>Acciones</th>
		</tr>
	</thead>
	<tbody>

		@forelse($users as $user)
		<tr>
      <td>
          {{  $user->id   }}
      </td>
			<td>
				{{  $user->name  }}
			</td>
			<td>{{  $user->email   }}</td>
			<td>
				@foreach($user->roles as $role)
				{{  $role->display_name }}
				@endforeach				
			</td>
			<td>
					<a href="{{ route('usuarios.edit' , $user->id) }} " class="btn btn-info btn-xs">Editar</a>
					<form style="display: inline;" 
						method="POST" 
						action="{{ route('usuarios.destroy', $user->id) }}" accept-charset="utf-8">
						{!! method_field('DELETE') !!}
						{!! csrf_field() !!}
						<button class="btn btn-danger btn-xs" type="submit">Eliminar</button>
					</form>
			</td>
			
		</tr>
		@empty
			<p>No hay Usuarios :(</p>
		@endforelse

		
	</tbody>
</table>


@stop