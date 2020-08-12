@extends('backendtemplate')
@section('content')
<div class="container-fluid">
	<h2>Category Create</h2>
	@if ($errors->any())
		<div class="alert alert-danger">
			<ul>
				@foreach ($errors->all() as $error)
				<li>{{ $error }}</li>
				@endforeach
			</ul>
		</div>
	@endif
	<div class="container">
		<form action="{{route('categories.store')}}" method="post" enctype="multipart/form-data">
			@csrf
			<div class="form-group">
				<label>Name</label>
				<input type="text" name="name" class="form-control" >
			</div>
			<div class="form-group">
				<label>Photo</label>
				<input type="file" name="photo" class="form-control" >
			</div>
			<div class="form-group">
				<input type="submit" name="btnsubmit" class="btn-primary">
			</div>
		</form>	
	</div>
</div>
@endsection