<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Mis Sitio</title>
	<style type="text/css" media="screen">
		.active{
			text-decoration: none;
			color: red;
		}
		.error{
			color: red;
			font-size: 12px;
		}
	</style>
</head>
<body>
	<header>

		<?php 
			function activeMenu($url)
			{
				return request()->is($url) ? 'active' : '';
			}
		?>

		{{-- <h1>{{ request()->is('/') ? 'Estas en el home' : 'No estas en el home' }}</h1> --}}
		<nav>
			
			<a class="{{ activeMenu('/') }}" href="{{ route('home') }}" title="">Inicio</a>
				
			<a class="{{ activeMenu('saludos/*') }}" href="{{ route('saludos') }}" title="">Saludos</a>
				
			<a class="{{ activeMenu('mensajes/create') }}" href="{{ route('mensajes.create') }}" title="">Contactos</a>

			

		

			@if (auth()->check())
			<a class="{{ activeMenu('mensajes') }}" href="{{ route('mensajes.index') }}" title="">Mensajes</a>
					<a class="{{ activeMenu('logout') }}" href="/logout" title="">Cerrar sesión de {{ auth()->user()->email }}</a>
			@endif

			@if (auth()->guest())
				<a class="{{ activeMenu('login') }}" href="/login" title="">Login</a>
			@endif
			
				
		</nav>
	</header><!-- /header -->
	@yield('contenido')
	<footer>CopyRight {{ date('Y') }}</footer>

</body>
</html>