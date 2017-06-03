@extends('layouts.app')

@section('content')
	<div class="container">
		<div class="row">
			<div class="page-header">
				<a href="{{ route('blogs.create') }}" class="btn btn-default">Create a new blog</a>
			</div>
			<div class="col-md-6">
				<div class="list-group">
					@foreach($blogs as $blog)
						<a href="{{ action('BlogsController@show', [$blog->id]) }}" class="list-group-item active">
							<h4 class="list-group-item-heading"> {{ $blog->title }} </h4>
							<p class="list-group-item-text">{{ $blog->content }}</p>
						</a>
					@endforeach
				</div>
			</div>
		</div>
	</div>
@endsection