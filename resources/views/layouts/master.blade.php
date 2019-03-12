<!DOCTYPE HTML>
<!--
	Helios by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>@yield('title')</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="{{asset('helios/assets/css/main.css')}} " />
		@yield('css')
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
	</head>
	<body>
		<div id="page-wrapper">
			<!-- Header -->
			@include('includes.header')
			<!-- Main -->
			@yield('content')
			<!-- FOOTER -->
			@include('includes.footer')
		</div>
		<!-- Scripts -->
		<script src="{{asset('helios/assets/js/jquery.min.js')}}"></script>
		<script src="{{asset('helios/assets/js/jquery.dropotron.min.js')}}"></script>
		<script src="{{asset('helios/assets/js/jquery.scrolly.min.js')}}"></script>
		<script src="{{asset('helios/assets/js/jquery.onvisible.min.js')}}"></script>
		<script src="{{asset('helios/assets/js/skel.min.js')}}"></script>
		<script src="{{asset('helios/assets/js/util.js')}}"></script>
		<!--[if lte IE 8]><script src="{{asset('helios/assets/js/ie/respond.min.js')}}"></script><![endif]-->
		<script src="{{asset('helios/assets/js/main.js')}}"></script>
	</body>
</html>