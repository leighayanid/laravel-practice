@extends('layouts.app')

@section('content')
	<div class="container">
		<div class="row">
			<div class="page-header">
				<a href="{{ action('StudentController@edit', $student->id) }}" class="btn btn-default">Edit record</a>
			</div>
			<div class="col-md-6 col-md-offset-3">
				<ul class="list-group">
					<li class="list-group-item"> {{ $student->full_name }} </li>
					<li class="list-group-item"> {{ $student->address }} </li>
				</ul>
			</div>
		</div>
	</div>
@endsection