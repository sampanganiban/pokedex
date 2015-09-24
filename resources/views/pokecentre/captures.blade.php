@extends('master')

@section('content')
	
	<div class="row">
		<div class="columns">
			<h1>Your Captures</h1>
			
			<ul>
				@forelse($captures as $capture)
					<div>
						<img src="/img/captures/{{$capture->photo}}" alt="Image of {{$capture->name}}">
						<a href="/pokecentre/captures/{{ $capture->id }}/edit">Edit this Capture</a>
					</div>
				@empty
					<p>You have not caught any Pokemon :(</p>
				@endforelse
			</ul>

		</div>
	</div>
	
@endsection