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
			<tr>
				<td>1</td>
				<td>Brand One</td>
				<td>Image</td>
				<td>
					<a href="{{route('brands.edit',1)}}" class="btn btn-warning">Edit</a>
					<a href="#" class="btn btn-primary">Delete</a>
				</td>
			</tr>
		</tbody>
	</table>
</div>
@endsection