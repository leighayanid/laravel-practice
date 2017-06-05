@extends('layouts.app')

@section('content')
	<div class="container">
		<div class="row">
			<div class="col-md-6 col-md-offset-3">
				<div class="panel panel-default">
					<div class="panel-heading">
						<h4>Edit school record.</h4>
					</div>
					<div class="panel-body">
						{!! Form::model($school, ['method' => 'PATCH', 'action' => ['SchoolController@update', $school->id]]) !!}
							<div class="form-group">
								{!! Form::label('name', 'School name') !!}
								{!! Form::text('name', null, ['class'=> 'form-control']) !!}
							</div>
								<div class="form-group">
								{!! Form::label('address', 'Address') !!}
								{!! Form::text('address', null, ['class'=> 'form-control']) !!}
							</div>
								<div class="form-group">
								{!! Form::submit('Edit school record', ['class' => 'btn btn-default']) !!}
							</div>
						{!! Form::close() !!}
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection