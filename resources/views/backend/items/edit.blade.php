@extends('backendtemplate')
@section('content')
<div class="container-fluid">
	<h2>Item Edit (Form / Old value)</h2>
	
	<div class="container">
		<form class="" action="{{route('items.update',$item->id)}}" method="post" enctype="multipart/form-data">
			@csrf
			@method('PUT')
			<div class="form-group">
				<label>Code No.</label>
				<input type="text" name="codeno" class="form-control {{ $errors->has('name') ? 'border border:danger' : ''}}" value="{{$item->codeno}}" readonly="">
				<span style="color: red;">{!! $errors->first('name', '<p class="help-block">:message</p>') !!}</span>
			</div>
			<div class="form-group">
				<label>Name</label>
				<input type="text" name="name" class="form-control {{ $errors->has('name') ? 'border border:danger' : ''}}" value="{{$item->name}}">
				<span style="color: red;">{!! $errors->first('name', '<p class="help-block">:message</p>') !!}</span>
			</div>
			<div class="form-group">
				<label>Price</label>
				<input type="number" name="price" class="form-control {{ $errors->has('name') ? 'border border:danger' : ''}}" value="{{$item->price}}">
				<span style="color: red;">{!! $errors->first('name', '<p class="help-block">:message</p>') !!}</span>
			</div>
			<div class="form-group">
				<label>Discount</label>
				<input type="number" name="discount" class="form-control {{ $errors->has('name') ? 'border border:danger' : ''}}" value="{{$item->discount}}">
				<span style="color: red;">{!! $errors->first('name', '<p class="help-block">:message</p>') !!}</span>
			</div>
			<div class="form-group">
				<label>Photo</label>
				<input type="file" name="photo" class="form-control {{ $errors->has('name') ? 'border border:danger' : ''}}">
				<img src="{{asset($item->photo)}}" class="img-fluid w-25 my-3" >
				<input type="hidden" name="oldphoto" value="{{$item->photo}}">
				<span style="color: red;">{!! $errors->first('name', '<p class="help-block">:message</p>') !!}</span>
			</div>
			<div class="form-group">
				<label>Description</label>
				<textarea class="form-control {{ $errors->has('name') ? 'border border:danger' : ''}}" name="description">{{$item->description}}</textarea>
				<span style="color: red;">{!! $errors->first('name', '<p class="help-block">:message</p>') !!}</span>
			</div>
			<div class="form-group">
				<label>Brand</label>
				<select class="form-control {{ $errors->has('name') ? 'border border:danger' : ''}}" name="brand">
					<optgroup label="Choose brand">
						@foreach($brands as $brand)
						<option value="{{$brand->id}}"
							@if($brand->id == $item ->brand_id){{'selected'}})
							@endif
							>{{$brand->name}}</option>
						@endforeach
					</optgroup>
				</select>
				<span style="color: red;">{!! $errors->first('name', '<p class="help-block">:message</p>') !!}</span>
			</div>
			<div class="form-group">
				<label>Subcategory_id</label>
				<select class="form-control {{ $errors->has('name') ? 'border border:danger' : ''}}" name="subcategory">
					<optgroup label="Choose subcategory">
						@foreach($subcategories as $subcategory)
						<option value="{{$subcategory->id}}"
							@if($brand->id == $item ->brand_id){{'selected'}})
							@endif
							>{{$subcategory->name}}</option>
						@endforeach
					</optgroup>
				</select>
				<span style="color: red;">{!! $errors->first('name', '<p class="help-block">:message</p>') !!}</span>
			</div>
			<div class="form-group">
				<input type="submit" name="btnsubmit" class="btn btn-primary" value="Update">
			</div>
		</form>
	</div>
</div>
@endsection