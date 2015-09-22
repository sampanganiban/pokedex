@extends('master')

@section('content')

	<div class="row">
		<div class="columns">
			<h1>All Pokemon</h1>
			<hr>
			<ul>
				@foreach( $allPokemon as $pokemon)
				<li>{{ $pokemon->name }}</li>
				@endforeach
			</ul>
		</div>
	</div>

@endsection