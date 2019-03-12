@extends('layouts.master')

@section('css')
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="{{asset('css/cea.css')}}">
@endsection

@section('title')
	Video Title
@endsection

@section('header-title')
	Video Title
@endsection

@section('content')
@if(isset($post))
<div class="wrapper style1">

	<div class="container">
		<article id="main" class="special post">
			<header class="post-title">
				<h2>{{$post->title}}</h2>
			</header>
			<a href="#" class="image featured"><img src="{{asset('helios/images/pic06.jpg')}}" alt="" /></a>
			@auth
			<div class="post-buttons">
				<a href="#" onclick="return false" class="icon"><i class="material-icons">cloud</i></a>
				<a href="#" onclick="return false" class="icon on"><i class="material-icons">favorite</i></a>
				<a href="#" onclick="return false" class="icon"><i class="material-icons">attachment</i></a>
				<a href="#" onclick="return false" class="icon"><i class="material-icons">computer</i></a>
				<a href="#" onclick="return false" class="icon"><i class="material-icons">traffic</i></a>
			</div>
			@endauth
			<p>
				{{ $post->message }}
			</p>
			<section>
				<header>
					<h3>Comentarios</h3>
				</header>
				@auth
				<div id="addComment">

					<div class="webflow-style-input" style="width: 70%">
						<input type="textarea" class="" type="email" placeholder="Deja un comentario"></input>
						<button type="submit"><i class="material-icons">arrow_forward</i></button>
					</div>
					
				</div>
				@endauth
			</section>
			<section>
				@foreach ($post->comments as $comment)
					<comment>
						<div class="row">
							<div class="2u user-card">
								<header>
									<div class="profile-picture">
										<a href="{{route('profile') . '/' . $comment->author->id}}" class="image profile" style="width:50px; height:50px;"><img src="{{ $comment->author->avatar->url }}" alt="" /></a>
									</div>
									<strong><a href="{{route('profile') . '/' . $comment->author->id}}">{{$comment->author->name}}</a></strong>
								</header>
							</div>
							<div class="10u comment-content">
								<div class="row">
									<span>
										{{$comment->message}}
									</span>
								</div>
								@auth								
								<div class="post-buttons">
									<a href="#" onclick="return false" class="icon on"><i class="material-icons">thumb_up</i></a>
									<a href="#" onclick="return false" class="icon"><i class="material-icons">thumb_down</i></a>
								</div>
								@endauth
							</div>
						</div>
					</comment>
				@endforeach
				</section>
		</article>
	</div>

</div>

@endif
	
@endsection