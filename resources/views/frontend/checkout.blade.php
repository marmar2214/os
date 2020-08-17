@extends('frontendtemplate')

@section('content')
	<div class="col-lg-9">
		<h2>Checkout Page</h2>
		<div id="checkout_body">
			<div class="container my-5 text-center">
				<div class="row">
					<div class="offset-md-2 col-md-8">
						<div class="table-responsive">
							<table class="table">
								<thead>
									<tr>
										<th>No.</th>
										<th>Photo</th>
										<th>Item Name</th>
										<th>Price</th>
										<th>Qty</th>
										<th>Sub Total</th>
									</tr>
								</thead>
								<tbody>

								</tbody>
							</table>
						</div>
					</div>

					<div class="col-md-4 offset-md-4 text-left">
						<div class="form-group">
							<textarea class="form-control notes" placeholder="Notes"></textarea>
							<input type="hidden" name="" class="total">
						</div>
					</div>

					<div class="col-md-4 offset-md-2 text-left">
						<a href="{{route('home')}}" class="btn btn-success">Continue Shopping</a>
					</div>
					<textarea class="notes" placeholder="You are not here!"></textarea>
					@role('customer')
						<div class="col-md-4 offset-md-2 text-left">
							<a href="#" class="btn btn-success buy_now">Checkout</a>
						</div>
					@else
						<a href="{{route('login')}}" class="btn btn-info float-right">Login To Checkout</a>
					@endrole
				</div>
			</div>
		</div>
	</div>
@endsection

@section('script')
  <script type="text/javascript" src="{{asset('frontend/js/script.js')}}"></script>
  @endsection