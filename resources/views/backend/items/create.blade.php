@extends('backendtemplate')
@section('content')
<div class="container-fluid">
	<h2>Item Create (Form)</h2>

	
	<div class="container">
		<form class="" action="{{route('items.store')}}" method="post" enctype="multipart/form-data">
			@csrf
			<div class="form-group ">
				<label>Code No.</label>
				<input type="text" name="codeno" class="form-control {{ $errors->has('codeno') ? 'border border:danger' : ''}}" >
				<span style="color: red;">{!! $errors->first('codeno', '<p class="help-block">:message</p>') !!}</span>
			</div>
			<div class="form-group" >
				<label>Name</label>
				<input type="text" name="name" class="form-control {{ $errors->has('name') ? 'border border:danger' : ''}}" placeholder="Enter Name">       
				<span style="color: red;">{!! $errors->first('name', '<p class="help-block">:message</p>') !!}</span>

			</div>
			<div class="form-group">
				<label>Price</label>
				<input type="number" name="price" class="form-control{{ $errors->has('price') ? 'border border:danger' : ''}}">
				<span style="color: red;">{!! $errors->first('pricee', '<p class="help-block">:message</p>') !!}</span>
			</div>
			<div class="form-group">
				<label>Discount</label>
				<input type="number" name="discount" class="form-control{{ $errors->has('discount') ? 'border border:danger' : ''}}">
				<span style="color: red;">{!! $errors->first('name', '<p class="help-block">:message</p>') !!}</span>
			</div>
			<div class="form-group">
				<label>Photo</label>
				<input type="file" name="photo" class="form-control{{ $errors->has('photo') ? 'border border:danger' : ''}}">
				<span style="color: red;">{!! $errors->first('photo', '<p class="help-block">:message</p>') !!}</span>
			</div>
			<div class="form-group">
				<label>Description</label>
				<textarea class="form-control {{ $errors->has('description') ? 'border border:danger' : ''}}" name="description"></textarea>
				<span style="color: red;">{!! $errors->first('description', '<p class="help-block">:message</p>') !!}</span>
			</div>
			<div class="form-group">
				<label>Brand</label>
				<select class="form-control {{ $errors->has('brand') ? 'border border:danger' : ''}}" name="brand">
					<optgroup label="Choose brand">
						@foreach($brands as $brand)
							<option value="{{$brand->id}}">{{$brand->name}}</option>
						@endforeach
					</optgroup>
				</select>
				<span style="color: red;">{!! $errors->first('brand', '<p class="help-block">:message</p>') !!}</span>
			</div>
			<div class="form-group">
				<label>Subcategory_id</label>
				<select class="form-control {{ $errors->has('subcategory') ? 'border border:danger' : ''}}" name="subcategory">
					<optgroup label="Choose subcategory">
						@foreach($subcategories as $subcategory)
						<option value="{{$subcategory->id}}">{{$subcategory->name}}</option>
						@endforeach
					</optgroup>
				</select>
				<span style="color: red;">{!! $errors->first('subcategory', '<p class="help-block">:message</p>') !!}</span>
			</div>
			<div class="form-group">
				<input type="submit" name="btnsubmit" class="btn btn-primary">
			</div>
		</form>
	</div>
</div>
@endsection