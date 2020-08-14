@extends('frontendtemplate')

@section('content')
	<div class="col-lg-9">
		<h2>Registration Page</h2>
		<div class="container">
		<form class="" action="{{route('items.store')}}" method="post" enctype="multipart/form-data">
			@csrf
			<div class="form-group">
				<label>Photo</label>
				<input type="file" name="photo" class="form-control{{ $errors->has('name') ? 'border border:danger' : ''}}">
				<span style="color: red;">{!! $errors->first('photo', '<p class="help-block">:message</p>') !!}</span>
			</div>
			<div class="form-group" >
				<label>Name</label>
				<input type="text" name="name" class="form-control {{ $errors->has('name') ? 'border border:danger' : ''}}" placeholder="Enter Name">       
				<span style="color: red;">{!! $errors->first('name', '<p class="help-block">:message</p>') !!}</span>

			</div>
			<div class="form-group ">
				<label>Email</label>
				<input type="text" name="email" class="form-control {{ $errors->has('name') ? 'border border:danger' : ''}}" >
				<span style="color: red;">{!! $errors->first('email', '<p class="help-block">:message</p>') !!}</span>
			</div>
			<div class="form-group">
				<label>Phone</label>
				<input type="number" name="phone" class="form-control{{ $errors->has('name') ? 'border border:danger' : ''}}">
				<span style="color: red;">{!! $errors->first('phonee', '<p class="help-block">:message</p>') !!}</span>
			</div>
			<div class="form-group">
				<label>Password</label>
				<input type="number" name="discount" class="form-control{{ $errors->has('name') ? 'border border:danger' : ''}}">
				<span style="color: red;">{!! $errors->first('password', '<p class="help-block">:message</p>') !!}</span>
			</div>
			<div class="form-group">
				<label>Confirm Password</label>
				<input type="file" name="photo" class="form-control{{ $errors->has('name') ? 'border border:danger' : ''}}">
				<span style="color: red;">{!! $errors->first('confirm_password', '<p class="help-block">:message</p>') !!}</span>
			</div>
			<div class="form-group">
				<label>Address</label>
				<textarea class="form-control {{ $errors->has('name') ? 'border border:danger' : ''}}" name="description"></textarea>
				<span style="color: red;">{!! $errors->first('address', '<p class="help-block">:message</p>') !!}</span>
			</div>
			
			<div class="form-group">
				<input type="submit" name="btnsubmit" class="btn btn-primary">
			</div>
		</form>
	</div>
	</div>
@endsection