@extends('layouts.master')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading">{{trans('Update user')}}</div>

				<div class="panel-body">
					{!! Html::ul($errors->all()) !!}

					{!! Form::model($user, array('route' => array('users.update', $user->id), 'method' => 'PUT')) !!}
					<div class="form-group">
					{!! Form::label('name', trans('User name')) !!}
					{!! Form::text('name', null, array('class' => 'form-control')) !!}
					</div>

					<div class="form-group">
					{!! Form::label('email', trans('Email')) !!}
					{!! Form::text('email', null, array('class' => 'form-control')) !!}
					</div>

					<div class="form-group">
					{!! Form::label('password', trans('Password')) !!}
					<input type="password" class="form-control" required="required" name="password" placeholder="Password">
					</div>

					<div class="form-group">
					{!! Form::label('password_confirmation', trans('Confirm_password')) !!}
					<input type="password" class="form-control" required="required" name="password_confirmation" placeholder="Confirm Password">
					</div>
  					<div class="form-group">
					{!! Form::label('role', trans('Role')) !!}
					<select class="form-control" name="role" >
                                      <option value="1" >Admin</option>
                                      <option value="2" >Employee</option>
                                      <option value="3" >Teacher</option>
                                    </select>
                     </div>
					{!! Form::submit(trans('Submit'), array('class' => 'btn btn-primary')) !!}

					{!! Form::close() !!}
				</div>
			</div>
		</div>
	</div>
</div>
@stop