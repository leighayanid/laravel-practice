@extends('layouts.app')

@section('content')
	<div class="container">
		<div class="row">
			<div class="col-md-6 col-md-offset-3">
				<div class="panel panel-default">
					<div class="panel-heading">
						<h4>Create a new blog</h4>
					</div>
					<div class="panel-body">
						{!! Form::open() !!}
							<div class="form-group">
								{!! Form::label('title', 'Title of your blog') !!}
								{!! Form::text('title', null, ['class'=> 'form-control']) !!}
							</div>
							<div class="form-group">
								{!! Form::label('content', 'Type your content here..') !!}
								{!! Form::text('content', null, ['class'=> 'form-control', 'rows' => '10']) !!}
							</div>
							<div class="form-group">
								{!! Form::submit('Add Blog', ['class' => 'btn btn-default']) !!}
							</div>
						{!! Form::close() !!}
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection