@extends('frontendtemplate')

@section('content')
	<div class="col-lg-9">
		<h2>Item Detail Page</h2>
		<div class="container-fluid">
		<div class="row">
			<div class="col-md-4">
				<img src="{{asset($items->photo)}}" class="img-fluid w-100" >
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
				<p>{{$items->name}}</p>
				<p>{{$items->codeno}}</p>
				<p>{{$items->price}}</p>
				<p>{{$items->description}}</p>
				<p>{{$items->brand->name}}</p>
				<p>{{$items->subcategory->name}}</p>
			</div>
		</div>
	</div>
	</div>
@endsection
@section('script')
  <script type="text/javascript" src="{{asset('frontend/js/script.js')}}"></script>
  @endsection