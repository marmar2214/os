@extends('backendtemplate')
@section('content')
	<div class="container-fluid">
		<h2>Subcategory Edit(Form/Old Value)</h2>
		<div class="container">
		<form action="{{route('subcategories.update',$subcategories->id)}}" method="post" enctype="multipart/form-data">
			@csrf
			@method('PUT')
			<div class="form-group">
				<label>Name</label>
				<input type="text" name="name" class="form-control {{ $errors->has('name') ? 'border border:danger' : ''}}" value="{{$subcategories->name}}">
				<span style="color: red;">{!! $errors->first('name', '<p class="help-block">:message</p>') !!}</span>
			</div>
			<div class="form-group">
				<label>Category_id</label>
				<select class="form-control {{ $errors->has('category') ? 'border border:danger' : ''}}" name="category">
					<optgroup label="Choose subcategory">
						@foreach($subcategories as $subcategory)
						<option value="{{$categories->id}}"
							@if($categories->id == $subcategories->category_id){{'selected'}}
							@endif
							>{{$subcategories->name}}</option>
						@endforeach
					</optgroup>
				</select>
				<span style="color: red;">{!! $errors->first('subcategory', '<p class="help-block">:message</p>') !!}</span>
			</div>
			<div class="form-group">
				<input type="submit" name="btnsubmit" class="btn btn-primary" value="Update">
			</div>
		</form>
	</div>
	</div>
@endsection