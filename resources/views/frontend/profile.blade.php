@extends('frontendtemplate')

@section('content')
	<div class="col-lg-9">
		<h2>Customer Profile Page</h2>
		{{-- <div class="container">
			<img src="{{asset($items->photo)}}" class="img-fluid w-25" >
		</div> --}}
		{{Auth::user()->name}}
		{{Auth::user()->email}}
		
	</div>
@endsection