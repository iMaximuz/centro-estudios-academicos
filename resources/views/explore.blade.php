@extends('layouts.master')

@section('css')
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="{{asset('css/cea.css')}}">
@endsection

@section('title')
	Explore
@endsection

@section('header-title')
	Explore
@endsection

@section('content')
	<div class="wrapper style1">
		<div class="container">
			<div class="row ">
				<div class="4u 12u(mobile) important(mobile)" id="sidebar">
					<hr class="first" />
					<section>
						<header>
							<h3>Buscar</h3>
						</header>
						<div class="webflow-style-input">
							<input type="textarea" style="width: 70%" type="email" placeholder="Buscar"></input>
							<button type="submit"><i class="material-icons">search</i></button>
						</div>
						<br >
						<header>
							<h3>Ordenar por</h3>
						</header>
						<ul>
							<li><a href="#"><strong> Reciente </strong></a></li>
							<li><a href="#">Lo más valorado</a></li>
						</ul>
					</section>
				</div>
				<div class="8u 12u(mobile)" id="content">
					<div class="row">
						<article class="4u 12u(mobile) special">
								<a href="#" class="image featured"><img src="{{asset('helios/images/pic07.jpg') }}" alt="" /></a>
								<header>
									<h3><a href="#">Gravida aliquam penatibus</a></h3>
								</header>
								<p>
									Amet nullam fringilla nibh nulla convallis tique ante proin sociis accumsan lobortis. Auctor etiam
									porttitor phasellus tempus cubilia ultrices tempor sagittis. Nisl fermentum consequat integer interdum.
								</p>
							</article>
							<article class="4u 12u(mobile) special">
								<a href="#" class="image featured"><img src="{{asset('helios/images/pic08.jpg') }}" alt="" /></a>
								<header>
									<h3><a href="#">Sed quis rhoncus placerat</a></h3>
								</header>
								<p>
									Amet nullam fringilla nibh nulla convallis tique ante proin sociis accumsan lobortis. Auctor etiam
									porttitor phasellus tempus cubilia ultrices tempor sagittis. Nisl fermentum consequat integer interdum.
								</p>
							</article>
							<article class="4u 12u(mobile) special">
								<a href="#" class="image featured"><img src="{{asset('helios/images/pic09.jpg') }}" alt="" /></a>
								<header>
									<h3><a href="#">Magna laoreet et aliquam</a></h3>
								</header>
								<p>
									Amet nullam fringilla nibh nulla convallis tique ante proin sociis accumsan lobortis. Auctor etiam
									porttitor phasellus tempus cubilia ultrices tempor sagittis. Nisl fermentum consequat integer interdum.
								</p>
							</article>
					</div>
				</div>
			</div>
		</div>

	</div>
@endsection