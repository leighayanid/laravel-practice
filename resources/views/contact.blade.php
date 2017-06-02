@extends('layouts.app')
@section('content')
	<div class="container">
		<h4>Contact Page {{ $email }}</h4>
			<ul class="list-group">
				@foreach($contactNumber as $number)
						<li class="list-group-item">{{ $number }}</li>
				@endforeach
			</ul>
	</div>
@endsection