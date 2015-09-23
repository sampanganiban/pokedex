@extends('master')

@section('content')

<div class="row">
	<div class="columns">
		<h1>Welcome <strong>{{ Auth::user()->name }}</strong> to Your Pokécentre!</h1>

		<h3>Trainer Statistics:</h3>
		<ul>
			<li><strong>Your Trainer ID is: </strong>{{ Auth::user()->id }}</li>
			<li><strong>Your Trainer email is: </strong>{{Auth::user()->email}}</li>
		</ul>
		
		<h3>Global Statistics:</h3>
		<ul>
			<li><strong>Total Registered Trainers:</strong> {{ $totalTrainers }}</li>
		</ul>

	</div>
</div>

@endsection