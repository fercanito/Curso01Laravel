<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Mis Sitio</title>
	<link rel="stylesheet" href="">
</head>
<body>
	<header>

		<nav>
			<ul>
				<li><a href="{{ route('home') }}" title="">Inicio</a></li>
				<li><a href="{{ route('contactos') }}" title="">Contactos</a></li>
				<li><a href="{{ route('saludos') }}" title="">Saludos</a></li>
			</ul>
		</nav>
	</header><!-- /header -->
	@yield('contenido')
	<footer>CopyRight {{ date('Y') }}</footer>

</body>
</html>