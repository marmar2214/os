@extends('backendtemplate')
@section('content')
<div class="container-fluid">
	<h2 class="d-inline-block">Category List(Table)</h2>
	<a href="{{route('categories.create')}}" class="btn btn-primary float-right">Add Categories</a>
	<table class="table table-bordered">
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
				<td>Category One</td>
				<td>Image</td>
				<td>
					<a href="{{route('categories.edit',1)}}" class="btn btn-warning">Edit</a>
					<a href="#" class="btn btn-danger">Delete</a>
				</td>
			</tr>
		</tbody>
	</table>
</div>
@endsection