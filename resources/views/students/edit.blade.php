@extends('layouts.app')

@section('content')
	<div class="container">
		<div class="row">
			<div class="col-md-6 col-md-offset-3">
				<div class="panel panel-default">
					<div class="panel-heading">
						<h4>Edit student record</h4>
					</div>
					<div class="panel-body">
						{!! Form::open($student, ['method' => 'PATCH', action' => ['StudentController@update', $student->id]]) !!}
							<div class="form-group">
								{!! Form::label('full_name', 'Full name') !!}
								{!! Form::text('full_name', null, ['class' => 'form-control']) !!}
							</div>
							<div class="form-group">
								{!! Form::label('address', 'Home address') !!}
								{!! Form::text('address', null, ['class' => 'form-control']) !!}
							</div>
							<div class="form-group">
								{!! Form::submit('Edit record', ['class' => 'btn btn-primary']) !!}
							</div>
						{!! Form::close() !!}
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection