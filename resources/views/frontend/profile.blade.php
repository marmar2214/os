@extends('frontendtemplate')

@section('content')
	<div class="col-lg-9">
		<h2>Customer Profile Page</h2>
		{{-- <div class="container">
			<img src="{{asset($items->photo)}}" class="img-fluid w-25" >
		</div> --}}
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
	</div>
@endsection