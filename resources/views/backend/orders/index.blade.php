@extends('backendtemplate')
@section('content')
<div class="container-fluid">
	<h2>Orders List(Table)</h2>
	<table class="table table-bordered">
		<thead>
			<tr>
				<th>No</th>
				<th>Voucherno</th>
				<th>Order Date</th>
				<th>Note</th>
				<th>User_id</th>
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
				<td>{{$order->user_id}}</td>
			</tr>
			@endforeach
		</tbody>		
	</table>
</div>

@endsection