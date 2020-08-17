@extends('frontendtemplate')

@section('content')
	<div class="col-lg-9">
		<h2>Customer Profile Page</h2>
		<div class="container">
			<div class="row">
				<div class="col-md-4">
					<div class="row">
						<div class="col-md-6">
							<p>Name:</p>
							<p>Email:</p>
						</div>
						<div class="col-md-6">
							<p>{{Auth::user()->name}}</p>
							<p>{{Auth::user()->email}}</p>
						</div>
					</div>
				</div>
			</div>
		</div>
		
		
	</div>
@endsection