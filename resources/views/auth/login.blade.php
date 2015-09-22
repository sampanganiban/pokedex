@extends('master')

@section('content')

<div class="row">
	<div class="columns">
		<h1>Trainer Login</h1>
		
		<form action="/auth/login" method="post">
			
			{{ csrf_field() }}

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

			<input type="submit" class="tiny button" value="Login">

		</form>

	</div>
</div>

@endsection