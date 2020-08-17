@extends('backendtemplate')
@section('content')
	<div class="container-fluid">
	<h2>Order Detail (UI)</h2>
	<div class="row">
		<div class="col-md-12 text-center">
			<h3>MK's Home Accessories Shop</h3>
			<p>Diamond</p>
			<p>Diamond Plaza,Chan Aye Tharzan</p>
			<p>09987654231</p>
		</div>
	</div>

	<div class="container border border-dark">
		<div class="row">
			<div class="col-md-6">
				<div class="row">
					<div class="col-md-6">
						<p>Casher</p>
						<p>Voucher</p>

					</div>
					<div class="col-md-6">
						<p>: Tin Lei Mar</p>
						<p>: 20-327-JSB15</p>

					</div>
				</div>
			</div>
			<div class="col-md-6">
				<div class="row">
					<div class="col-md-6">
						<p>Date</p>
						<p>Order Time</p>

					</div>
					<div class="col-md-6">
						<p>: {{date('Y-m-d')}}  </p>
						<p>: {{date('h:m:s A')}}  </p>
					</div>
				</div>
			</div>
		</div>
		</div>
		<div class="container border border-dark">
			<div class="row table-responsive">
			<table class="table table-bordered" border="1" cellspacing="0" width="100%" border="border-dark">
				<thead>
					<tr>
						<th>Item Name</th>
						<th>Price</th>
						<th>Qty</th>
						<th>Amount</th>
					</tr>
				</thead>

				<tbody>
					@php $total=0; @endphp
					@foreach($order->items as $item)
					@php $price =$item->price; @endphp
					@php $discount = $item->discount;@endphp
					@if($discount)
					@php $unit_price = $discount; @endphp
					@else
					@php $unit_price=$price; @endphp
					@endif
					<tr>
						<td>{{$item->name}}</td>
						<td>{{$item->price}}</td>
						<td>{{$item->getRelationValue('pivot')->qty}}</td>
						<td>{{$amount=$item->price * $item->getRelationValue('pivot')->qty}}</td>

					</tr>
					@php
						$total+=$amount;
					@endphp

					@endforeach
				</tbody>
				<tfoot>
					<tr>
						<td colspan="3">Total Amount</td>
						<td>{{$total}}</td>
					</tr>
				</tfoot>
			</table>
		</div>
		</div>
		
	
	
</div>

@endsection