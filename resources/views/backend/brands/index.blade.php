@extends('backendtemplate')
@section('content')
<div class="container-fluid">
	<h2 class="d-inline-block">Brand List(Table)</h2>
	<a href="{{route('brands.create')}}" class="btn btn-primary float-right">Add Brands</a>
	<table class="table table-bodered">
		<thead>
			<tr>
				<td>No.</td>
				<td>Name</td>
				<td>Photo</td>
				<td>Action</td>
			</tr>
		</thead>
		<tbody>
			@php $i=1; @endphp
			@foreach($brands as $brand)
			<tr>
				<td>{{$brand->id}}</td>
				<td>{{$brand->name}}</td>
				<td><img src="{{asset($brand->photo)}}" class="img-fluid w-25"></td>
				<td>
					<a href="{{route('brands.edit',$brand->id)}}" class="btn btn-warning">Edit</a>
					
					<form action="{{route('brands.destroy',$brand->id)}}" method="post" onsubmit="return confirm('Are You Sure?')" class="d-inline-block">
						@csrf
						@method('DELETE')
						<input type="submit" name="btnsubmit" value="Delete" class="btn btn-danger">
					</form>
				</td>
			</tr>
			@endforeach
		</tbody>
	</table>
</div>
@endsection