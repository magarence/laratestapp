<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>@yield('title')</title>
		<link rel="stylesheet" href="{{ URL::to('src/css/main.css') }}">
		@yield('styles')
		<script src="https://code.jquery.com/jquery-2.2.3.min.js" integrity="sha256-a23g1Nt4dtEYOj7bR+vTu7+T8VP13humZFBJNIYoEJo=" crossorigin="anonymous"></script>
	</head>
	<body>
		@include('includes.header')
		<div class="main">
			@yield('content')
		</div>
	</body>
</html>