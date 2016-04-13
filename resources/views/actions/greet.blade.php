@extends('layouts.master')

@section('content')
	<div class="centered"><h1>Greetings {{ $name === null ? 'Doe' : $name }}!</h1></div>
@endsection