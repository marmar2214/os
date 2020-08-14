@extends('backendtemplate')
@section('content')
<div class="container-fluid">
	<h2>Item Show (UI)</h2>
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-4">
				<img src="{{asset($item->photo)}}" class="img-fluid w-100" >
			</div>
			<div class="colmd-4">
				<p>Product Name:</p>
				<p>Product Code:</p>
				<p>Product Price:</p>
				<p>Description:</p>
				<p>Brand:</p>
				<p>Subcategory:</p>
			</div>
			<div class="col-md-4">
				<p>{{$item->name}}</p>
				<p>{{$item->codeno}}</p>
				<p>{{$item->price}}</p>
				<p>{{$item->description}}</p>
				<p>{{$item->brand->name}}</p>
				<p>{{$item->subcategory->name}}</p>
			</div>
		</div>
	</div>
</div>
@endsection