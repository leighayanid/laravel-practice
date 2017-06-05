@extends('layouts.app')

@section('content')
	<a href="{{ action('BlogsController@edit', $blog->id) }}" class="btn btn-default">Edit blog</a>
	<div class="container">
		<ul class="list-group">
			<li class="list-group-item">{{ $blog->title }}</li>
			<li class="list-group-item">{{ $blog->content }}</li>
		</ul>
	</div>
@endsection