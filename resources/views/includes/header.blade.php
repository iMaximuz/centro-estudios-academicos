@guest
<div id="header" style="padding: 1.2em 0 2em 0;">
@else
<div id="header">
@endguest
	@guest
	@else
		<div class="inner">
			<header>
				<h1><a href="/" id="logo"></a></h1>
			</header>
		</div>
	@endguest
	<nav id="nav">
		<ul>

			@auth
				<li><a href="{{ route('login') }}">Iniciar Sesión</a></li>
				<li><a href="{{ route('register') }}">Registrarse</a></li>
			@else
				<li><a href="/">Home</a></li>
				<li>
					<a href="#">Contenido</a>
					<ul>
						<li><a href="{{route('explore')}}">Reciente</a></li>
						<li><a href="{{route('explore')}}">Lo más valorado</a></li>
					</ul>
				</li>
				<li><a href="{{ route('profile') }}">Perfil</a></li>
				<li>
					<a href="{{ route('logout') }}" onclick="event.preventDefault();
						document.getElementById('logout-form').submit();">Salir</a>

					<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
						@csrf
					</form>
				</li>
			@endguest

		</ul>
	</nav>

</div>
