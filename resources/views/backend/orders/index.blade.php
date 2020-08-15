@extends('backendtemplate')
@section('content')
<div class="container-fluid">
	<h2 class="d-inline-block">Order List (Table)</h2>
	<table class="table table-bordered my-3">
		<thead>
			<tr>
				<th>No</th>
				<th>Voucher No</th>
				<th>Order Date</th>
				<th>Note</th>
				<th>Total</th>
				<th>User Name</th>
				<th>Actions</th>
			</tr>
		</thead>
		<tbody>
			@php $i=1; @endphp
			@foreach($orders as $order)
			<tr>
				<td>{{$i++}}</td>
				<td>{{$order->voucherno}}</td>
				<td>{{$order->orderdate}}
				<td>{{$order->note}}</td>
				<td>{{$order->total}}</td>
				<td>{{$order->user->name}}</td>
				
				<td>
					<a href="{{route('orders.show',$order->id)}}">
						<span class="badge-primary badge-pill">Detail</span>
						
					</a>
					<a href="#" class="box" data-name="{{$order->name}}" data-photo="{{asset($order->photo)}}" data-price="{{$order->price}}" data-desc="{{$order->description}}">
						<span class="badge-primary badge-pill">Confirm</span>
						
					</a>
					
				</td>
				
				
			</tr>
			@endforeach
		</tbody>
		
	</table>
	
</div>



@endsection