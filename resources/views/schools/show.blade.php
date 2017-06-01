@extends('layouts.app')

@section('content')
	<div class="container">
		<div class="row">
			<div class="col-md-6 col-md-offset-3">
				<ul class="list-group">
					<li class="list-group-item">{{ $school->name}}</li>
					<li class="list-group-item">{{ $school->address}}</li>
				</ul>
			</div>
		</div>
	</div>
@endsection