@extends('backendtemplate')
@section('content')
<div class="container-fluid">

	<h2>Brand Create(Form)</h2>
	
	<div class="container">
		<form action="{{route('brands.store')}}" method="post" enctype="multipart/form-data">
			@csrf
			<div class="form-group">
				<label>Name</label>
				<input type="text" name="name" class="form-control{{ $errors->has('name') ? 'border border:danger' : ''}}">
				<span style="color: red;">{!! $errors->first('name', '<p class="help-block">:message</p>') !!}</span>
			</div>
			<div class="form-group">
				<label>photo</label>
				<input type="file" name="photo" class="form-control{{ $errors->has('name') ? 'border border:danger' : ''}}">
				<span style="color: red;">{!! $errors->first('name', '<p class="help-block">:message</p>') !!}</span>
			</div>
			<div class="form-group">
				<input type="submit" name="btnsubmit" class="btn btn-primary">
			</div>
		</form>
	</div>
</div>
@endsection