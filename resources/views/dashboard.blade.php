@extends('layouts.master')

@section('title')
	Dashboard
@endsection

@section('header-title')
	Home
@endsection

@section('content')
	<div class="wrapper style1">

		<div class="container">
			<div class="row">
				<article class="4u 12u(mobile) special">
					<a href="#" class="image featured"><img src="{{asset('helios/images/pic07.jpg')}} " alt="" /></a>
					<header>
						<h4><a href="#">Gravida aliquam penatibus</a></h4>
					</header>
					<p>
						Amet nullam fringilla nibh nulla convallis tique ante proin sociis accumsan lobortis. Auctor etiam
						porttitor phasellus tempus cubilia ultrices tempor sagittis. Nisl fermentum consequat integer interdum.
					</p>
				</article>
				<article class="4u 12u(mobile) special">
					<a href="#" class="image featured"><img src="{{asset('helios/images/pic08.jpg')}}" alt="" /></a>
					<header>
						<h3><a href="#">Sed quis rhoncus placerat</a></h3>
					</header>
					<p>
						Amet nullam fringilla nibh nulla convallis tique ante proin sociis accumsan lobortis. Auctor etiam
						porttitor phasellus tempus cubilia ultrices tempor sagittis. Nisl fermentum consequat integer interdum.
					</p>
				</article>
				<article class="4u 12u(mobile) special">
					<a href="#" class="image featured"><img src="{{asset('helios/images/pic09.jpg')}}" alt="" /></a>
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
@endsection