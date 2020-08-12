@extends('backendtemplate')
@section('content')
<div class="container-fluid">
	<h2>Subcategory Create (Form)</h2>

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
		<form class="" action="{{route('subcategories.store')}}" method="post" enctype="multipart/form-data">
			@csrf
			<div class="form-group">
				<label>Name</label>
				<input type="text" name="name" class="form-control">
			</div>
			<div class="form-group">
				<label>Category_id</label>
				<select class="form-control" name="category">
					<optgroup label="Choose subcategory">
						@foreach($categories as $category)
						<option value="{{$category->id}}">{{$category->name}}</option>
						@endforeach
					</optgroup>
				</select>
			</div>
			<div class="form-group">
				<input type="submit" name="btnsubmit" class="btn btn-primary">
			</div>
		</form>
	</div>
</div>
@endsection