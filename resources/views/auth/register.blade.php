@extends('master')

@section('content')

<div class="row">
	<div class="columns">
		<h1>Trainer Registration</h1>
		
		<form action="/auth/register" method="post">
			
			{{ csrf_field() }}

			<div>
				<label for="name">Full Name: </label>
				<input type="text" id="name" name="name" placeholder="Ash Ketchum" value="{{ old('name') }}">
				{{$errors->first('name')}}
			</div>

			<div>
				<label for="email">Email: </label>
				<input type="email" id="email" name="email" placeholder="ash@ketchum.com" value="{{ old('email') }}">
				{{$errors->first('email')}}
			</div>

			<div>
				<label for="password">Password: </label>
				<input type="password" id="password" name="password">
				{{$errors->first('password')}}
			</div>

			<div>
				<label for="password_confirmation">Confirm Password:</label>
				<input type="password" id="password_confirmation" name="password_confirmation">
				{{$errors->first('password_confirmation')}}
			</div>

			<input type="submit" class="tiny button" value="Start Catchin'">

		</form>

	</div>
</div>

@endsection