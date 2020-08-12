@extends('backendtemplate')
@section('content')
<div class="container-fluid">
	<h2>Item Create (Form)</h2>

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
		<form class="" action="{{route('items.store')}}" method="post" enctype="multipart/form-data">
			@csrf
			<div class="form-group">
				<label>Code No.</label>
				<input type="text" name="codeno" class="form-control">
			</div>
			<div class="form-group">
				<label>Name</label>
				<input type="text" name="name" class="form-control">
			</div>
			<div class="form-group">
				<label>Price</label>
				<input type="number" name="price" class="form-control">
			</div>
			<div class="form-group">
				<label>Discount</label>
				<input type="number" name="discount" class="form-control">
			</div>
			<div class="form-group">
				<label>Photo</label>
				<input type="file" name="photo" class="form-control">
			</div>
			<div class="form-group">
				<label>Description</label>
				<textarea class="form-control" name="description"></textarea>
			</div>
			<div class="form-group">
				<label>Brand</label>
				<select class="form-control" name="brand">
					<optgroup label="Choose brand">
						@foreach($brands as $brand)
							<option value="{{$brand->id}}">{{$brand->name}}</option>
						@endforeach
					</optgroup>
				</select>
			</div>
			<div class="form-group">
				<label>Subcategory_id</label>
				<select class="form-control" name="subcategory">
					<optgroup label="Choose subcategory">
						@foreach($subcategories as $subcategory)
						<option value="{{$subcategory->id}}">{{$subcategory->name}}</option>
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