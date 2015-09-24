@extends('master')

@section('content')
	
	<div class="row">
		<div class="columns">
			<h2><small>Pokemon #{{ $pokemon->id }}:</small> {{ $pokemon->name }}</h2>
			
			@foreach( $pokemon->capture as $capture )
				<figure>
					<img src="/img/captures/{{ $capture->photo }}" alt="Image of {{ $pokemon->name }} Pokemon">
				</figure>
				<figcaption>
					Caught By: {{$capture->user->name}}
				</figcaption>
			@endforeach

		</div>
	</div>

@endsection