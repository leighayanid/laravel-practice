@extends('layouts.app')

@section('content')
	<div class="container">
		<div class="row">
			<div class="page-header">
				<a href="{{ route('schools.create') }}" class="btn btn-default">Create a new school record</a>
			</div>
			<div class="col-md-6">
				<div class="list-group">
					@foreach($schools as $school)
						<a href="{{ action('SchoolController@show', [$school->id]) }}" class="list-group-item active">
							<h4 class="list-group-item-heading">{{ $school->name }}</h4>
							<p class="list-group-item-text">{{ $school->address }} </p>
						</a>
					@endforeach
				</div>
			</div>
		</div>
	</div>
@endsection