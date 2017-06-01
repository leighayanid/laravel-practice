@extends('layouts.app')

@section('content')
	<div class="container">
		<div class="row">
			<div class="col-md-6 col-md-offset-3">
				@foreach($blogs as $blog)
				<ul class="list-group">
					<li class="list-group-item">{{ $blog->title }}</li>
				</ul>
				@endforeach
			</div>
		</div>
	</div>
@endsection