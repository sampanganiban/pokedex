@extends('master')

@section('content')

	<div class="row">
		<div class="columns">
			<h1>Edit: <strong>{{$capture->pokemon->name}}</strong></h1>
			<p><em><strong>You made this capture:</strong></em> {{ \Carbon\Carbon::now()->diffForHumans($capture->created_at, true) }} <em><strong>ago</strong></em></p>

		<form action="/pokecentre/captures/{{ $capture->id }}" method="post" enctype="multipart/form-data">
				
				{{ csrf_field() }}

				<div>
					<label for="pokemon">Who's that Pokemon? </label>
					<select name="pokemon" id="pokemon">
						@foreach( $allPokemon as $pokemon )
						
							<option value="{{ $pokemon->id }}" {{ $pokemon->id == $capture->pokemon->id ? 'selected' : '' }}> {{ $pokemon->name }}</option>
						
						@endforeach
					</select>
					{{$errors->first('pokemon')}}
				</div>

				<div>
					<label for="photo">Photo: </label>
					<input type="file" name="photo">
					{{$errors->first('photo')}}
				</div>

				<input type="submit" class="tiny button" value="Edit your Capture!" name="editCapture">

			</form>
		</div>
	</div>

@endsection