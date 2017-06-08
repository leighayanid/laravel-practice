@extends('layouts.app')

@section('content')
	<div class="container">
		<div class="page-header">
			<a href="{{ action('BlogsController@edit', $blog->id) }}" class="btn btn-default">Edit blog</a>
			{!! Form::model($blog, ['method' => 'DELETE', 'action' => ['BlogsController@destroy', $blog->id]]) !!}
				{!!Form::submit('Delete blog', ['class' => 'btn btn-danger'])!!}
			{!! Form::close()!!}
		</div>
		<ul class="list-group">
			<li class="list-group-item">{{ $blog->title }}</li>
			<li class="list-group-item">{{ $blog->content }}</li>
		</ul>
	</div>
@endsection