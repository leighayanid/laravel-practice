@extends('layouts.app')

@section('content')
	<div class="container">
		<div class="row">
		<div class="page-header">
					<a href="{{ action('SchoolController@edit', $school->id) }}" class="btn btn-default"> Edit school record</a>
					{!! Form::model($school, ['method' => 'DELETE', 'action' => ['SchoolController@destroy', $school->id]])!!}
						{!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
					{!! Form::close() !!}
				</div>
			<div class="col-md-6 col-md-offset-3">
				<ul class="list-group">
					<li class="list-group-item">{{ $school->name}}</li>
					<li class="list-group-item">{{ $school->address}}</li>
				</ul>
			</div>
		</div>
	</div>
@endsection