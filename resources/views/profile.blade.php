@extends('layouts.master')

@section('title')
	Profile
@endsection

@section('header-title')
	Profile-Username
@endsection


@section('content')
<div class="wrapper style1">
		<div class="container">
			<div class="row ">
				<div class="4u 12u(mobile) important(mobile)" id="sidebar">
					<hr class="first" />
					<section>
						@if($user)
						<a href="#" class="image profile"><img src="{{ $user->avatar->url }}" alt="" /></a>
							<header>
								<h3>{{ $user->name }}</h3>
							</header>
						<ul>
							<li><a href="#"><strong> Jugadas </strong></a></li>
							<li><a href="#">Momentos</a></li>
						</ul>
						@else
						<a href="#" class="image profile"><img src="{{asset('helios/images/pic07.jpg') }}" alt="" /></a>
							<header>
								<h3>Usuario</h3>
							</header>
						<ul>
							<li><a href="#"><strong> Jugadas </strong></a></li>
							<li><a href="#">Momentos</a></li>
						</ul>
						@endif
					</section>
				</div>
				<div class="8u 12u(mobile)" id="content">
					@if($user)
						@foreach ($user->posts as $post)
							
							@if((($loop->iteration - 1) % 3) == 0)
							<div class="row">
							@endif
								<article class="4u 12u(mobile) special">
									<a href="/post/{{ $post->id }}" class="image featured"><img src="{{ App\Avatar::find(rand(1,15))->url }}" alt="" /></a>
									<header>
										<h3><a href="/post/{{ $post->id }}">{{$post->title}}</a></h3>
									</header>
									<p>
										{{ $post->message }}
									</p>
								</article>
							@if(($loop->iteration % 3) == 0)
								</div>
							@endif

						@endforeach
					@endif
				</div>
			</div>
		</div>

	</div>
@endsection