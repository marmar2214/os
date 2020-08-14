@extends('backendtemplate')
@section('content')
<div class="container-fluid">
	<h2>Brand Edit(Form/Old Value)</h2>
	
	<div class="container">
		<form action="{{route('brands.update',$brands->id)}}" method="post" enctype="multipart/form-data">
			@csrf
			@method('PUT')
			<div class="form-group">
				<label>Name</label>
				<input type="text" name="name" class="form-control {{ $errors->has('name') ? 'border border:danger' : ''}}" value="{{$brands->name}}">
				<span style="color: red;">{!! $errors->first('name', '<p class="help-block">:message</p>') !!}</span>
			</div>
			<div class="form-group">
				<label>Photo</label>
				<input type="file" name="photo" class="form-control {{ $errors->has('name') ? 'border border:danger' : ''}}" >
				<img src="{{asset($brands->photo)}}" class="img-fluid w-25 my-3">
				<input type="hidden" name="oldphoto" value="{{$brands->photo}}">
				<span style="color: red;">{!! $errors->first('name', '<p class="help-block">:message</p>') !!}</span>
				
			</div>
			<div class="form-group">
				<input type="submit" name="btnsubmit" class="btn btn-primary" value="Update">
			</div>
		</form>
	</div>
</div>
@endsection