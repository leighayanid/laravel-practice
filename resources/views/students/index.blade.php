@extends('layouts.app')

@section('content')
	<div class="container">
		<div class="row">
			<div class="col-md-6 col-md-offset-3">
				@foreach($students as $student)
					<ul class="list-group">
						<li class="list-group-item">{{ $student->full_name }} </li>
						<li class="list-group-item">{{ $student->address }} </li>
					</ul>
				@endforeach
			</div>
		</div>
	</div>
@endsection