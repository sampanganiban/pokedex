@extends('master')

@section('content')

<div class="row">
	<div class="columns">
		<h1>Welcome <strong>{{ Auth::user()->name }}</strong> to Your Pokécentre!</h1>

		<h3>Trainer Statistics:</h3>
		<ul>
			<li><strong>Your Trainer ID is: </strong>{{ Auth::user()->id }}</li>
			<li><strong>Your Trainer email is: </strong>{{Auth::user()->email}}</li>
			<li><strong>You have caught: </strong>{{ $totalTrainerCaptures }} <strong>Pokemon</strong></li>
		</ul>
		
		<h3>Global Statistics:</h3>
		<ul>
			<li><strong>Total Registered Trainers:</strong> {{ $totalTrainers }}</li>
			<li><strong>Total Global Captures: </strong>{{$totalGlobalCaptures}}</li>
		</ul>
			
		<a href="/pokecentre/capture" class="tiny button">Add your Capture</a>
		<a href="/pokecentre/captures" class="tiny button">See your Captures ({{ $totalTrainerCaptures }})</a>
	</div>
</div>

@endsection