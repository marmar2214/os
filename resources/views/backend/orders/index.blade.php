@extends('backendtemplate')
@section('content')
<div class="container-fluid">
	<h2 class="d-inline-block">Orders List(Table)</h2>
	<table class="table table-bordered my-3">
		<thead>
			<tr>
				<th>No</th>
				<th>Voucherno</th>
				<th>Order Date</th>
				<th>Note</th>
				<th>Total</th>
				<th>User Name</th>
				<th>Action</th>
			</tr>
		</thead>
		<tbody>
			@php $i=1; @endphp
			@foreach($orders as $order)
			<tr>
				<td>{{$i++}}</td>
				<td>{{$order->voucherno}}</td>
				<td>{{$order->orderdate}}</td>
				<td>{{$order->note}}</td>
				<td>{{$order->total}}</td>
				<td>{{$order->user->name}}</td>
				<td>
					
					<a href="{{route('orders.show',$order->id)}}" class="btn btn-info btn-sm">Detail</a>
					<a href="#" class="btn btn-primary btn-sm">Confirm</a>

				</td>
			</tr>
			@endforeach
		</tbody>		
	</table>
</div>




@endsection