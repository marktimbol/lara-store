<!DOCTYPE html>
<html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>@yield('pageTitle', 'Home') | Lara Shop</title>

		<link rel="stylesheet" href="{{ elixir("css/all.css") }}">
	</head>

	<body>
		<div class="container">

			@include('layouts.partials._navbar')

			@include('system.message')

			@yield('content')
			
		</div>

		<script src="{{ elixir("js/all.js") }}"></script>
	</body>
</html>