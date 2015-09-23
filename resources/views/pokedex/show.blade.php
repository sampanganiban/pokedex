@extends('master')

@section('content')
	
	<div class="row">
		<div class="columns">
			<h2><small>Pokemon #{{ $info->id }}:</small> {{ $info->name }}</h2>
		</div>
	</div>

@endsection