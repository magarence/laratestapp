@extends('layouts.master')

@section('content')
	<div class="centered">
		@foreach($actions as $action)
			<a href="{{ route('niceaction', ['action' => lcfirst($action->name)]) }}">{{ $action->name }}</a>
		@endforeach
		<br>
		<br>
		@if (count($errors) > 0)
	    <div>
            @foreach ($errors->all() as $error)
                {{ $error }}
            @endforeach
	    </div>
		@endif
		<form action="{{ route('add_action') }}" method="post">
			<label for="name">Name of Action</label>
			<input type="text" name="name"/>
			<label for="niceness">Niceness</label>
			<input type="text" name="niceness"/>
			<button type="submit" onclick="send(event)">Do a nice action</button>
			<input type="hidden" value="{{ Session::token() }}" name="_token">
		</form>
		<br><br><br>
		<ul>
			@foreach($logged_actions as $logged_action)
				<li>{{ $logged_action->nice_action->name }}
				@foreach($logged_action->nice_action->categories as $category)
					{{ $category->name }}
				@endforeach
				</li>
			@endforeach
		</ul>
		@if($logged_actions->lastPage() > 1)
			@for($i = 1; $i <= $logged_actions->lastPage(); $i++)
				<a href="{{ $logged_actions->url($i) }}">{{ $i }}</a>
			@endfor
		@endif
	<script type="text/javascript">
		function send(event) {
			event.preventDefault();
			$.ajax({
				url: "{{ route('add_action') }}",
				type: 'POST',
				data: $("form").serialize()

				//{name: $('name').val(), niceness: $('niceness').val(), _token: "{{ Session::token() }}"}
			})

			.fail(function(data) {

        // show any errors
        // best to remove for production
        console.log(data);
    });

		}
	</script>

	</div>
@endsection