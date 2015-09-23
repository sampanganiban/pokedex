@extends('master')

@section('content')
	
	<div class="row">
		<div class="columns">
		
		<h2>Upload Your Capture: </h2>
			
			<form action="/pokecentre/capture" method="post" enctype="multipart/form-data">
				
				{{ csrf_field() }}

				<div>
					<label for="pokemon">Who's that Pokemon? </label>
					<select name="pokemon" id="pokemon">
						@foreach( $allPokemon as $pokemon )
							<option value="{{ $pokemon->id }}"> {{ $pokemon->name }}</option>
						@endforeach
					</select>
					{{$errors->first('pokemon')}}
				</div>

				<div>
					<label for="photo">Photo: </label>
					<input type="file" name="photo">
					{{$errors->first('photo')}}
				</div>

				<input type="submit" class="tiny button" value="Caught!" name="capture">

			</form>
		</div>
	</div>

@endsection