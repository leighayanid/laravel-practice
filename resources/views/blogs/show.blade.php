@extends('layouts.app')

@section('content')
	<div class="container">
		<ul class="list-group">
			<li class="list-group-item">{{ $blog->title }}</li>
			<li class="list-group-item">{{ $blog->content }}</li>
		</ul>
	</div>
@endsection