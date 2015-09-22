@extends('master')

@section('content')

<div class="row">
	<div class="columns">
		<h1>Welcome <strong>{{ Auth::user()->name }}</strong> to Your Pokécentre!</h1>
		
		<h3>Global Statistics:</h3>
		<p><strong>Total Registered Trainers:</strong> {{ $totalTrainers }}</p>

	</div>
</div>

@endsection