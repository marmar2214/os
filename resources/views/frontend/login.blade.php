@extends('frontendtemplate')

@section('content')
	<div class="col-lg-9">
		<h2>Login Page</h2>
		<form>
			
			<label for="email">Email:</label>
			<input type="email" name="email" placeholder="Enter your email address here" class="form-control  {{ $errors->has('name') ? 'border border:danger' : ''}}" />
			<span style="color: red;">{!! $errors->first('name', '<p class="help-block">:message</p>') !!}</span>

			<label for="password">Password:</label>
			<input type="password" name="password" placeholder="Enter your password here" class="form-control  {{ $errors->has('name') ? 'border border:danger' : ''}}" />
			<span style="color: red;">{!! $errors->first('name', '<p class="help-block">:message</p>') !!}</span>

			<label for="password_confirmation">Confirm Password:</label>
			<input type="password" name="cpassword" placeholder="Re-type your password here" class="form-control  {{ $errors->has('name') ? 'border border:danger' : ''}}" />
			<span style="color: red;">{!! $errors->first('name', '<p class="help-block">:message</p>') !!}</span>

		</form>
	</div>
@endsection