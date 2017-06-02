@extends('layouts.app')

@section('content')
	<div class="container">
		<h2>About Page</h2> 
		<h2>{{ $name }} {{ $address }} {{ $age }}</h2>
		@if($isStudent == true)
			<h3>He is a student of {{ $school }}.</h3>
		@else
			<h3>He is not a student of {{ $school }}</h3>
		@endif
	</div>
@endsection