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

		<h1>{{ request()->is('/') ? 'Estas en el home' : 'No estas en el home' }}</h1>
		<nav>
			<ul>
				<li>
					<a class="{{ activeMenu('/') }}" href="{{ route('home') }}" title="">Inicio</a>
				</li>
				<li>
					<a class="{{ activeMenu('saludos/*') }}" href="{{ route('saludos') }}" title="">Saludos</a>
				</li>
				<li>
					<a class="{{ activeMenu('contactame') }}" href="{{ route('messages.create') }}" title="">Contactos</a>
				</li>

				
			</ul>
		</nav>
	</header><!-- /header -->
	@yield('contenido')
	<footer>CopyRight {{ date('Y') }}</footer>

</body>
</html>