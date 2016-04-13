@extends('layouts.master')

@section('content')
	<div class="centered">
		<a href="{{ route('home') }}">home</a>
		<h1>Greetings {{ $name === null ? 'Doe' : $name }}!</h1>
	</div>
@endsection