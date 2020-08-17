@extends('backendtemplate')
@section('content')
<div class="container">
	<h2>Order Detail</h2>
	
</div>

<div class="container table-responsive">
    <div class="row border border-dark ">
      <div class="col-md-12 text-center">
        <h3>TZ Mobile Shop</h3>
        <p>Myanmar,Mandalay</p>
        <p>09448438485</p>
      </div>
      <div class="row">

      </div>
      <div class="col-md-6">
        <div class="row">
          <div class="col-md-6">
            <p>Casher</p>
            <p>Voucher</p>

          </div>
          <div class="col-md-6">
            <p>:Wutt Mhone Shwe Yi</p>
            <p>: {{$order->voucherno}}</p>

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
            <p>:{{date('Y-m-d')}}</p>
            <p>:{{date('h:m:s A')}}</p>
          </div>
        </div>
      </div>
    </div>
    <div class="row ">

      <table width="100%" cellpadding="8" border="border-dark" >

        <tr>

        	<th>Item Name</th>
        	<th>Price</th>
        	<th>Qty</th>
        	<th>Amount</th>
        </tr>
        <tbody>
        	
        	@php $total=0; @endphp
        	@foreach($order->items as $item)
        	@php $price =$item->price; @endphp
        	@php $discount =$item->discount; @endphp
        	@if($discount)
        	@php $unit_price=$discount; @endphp
        	@else
        	@php $unit_price=$price; @endphp
        	@endif

        	<tr>

        		
        		<td>{{$item->name}}</td>
        		{{-- <td>{{$item->price}}</td> --}}
        		<td>{{$unit_price}}</td>
        		
        		<td>{{$item->getRelationValue('pivot')->qty}}</td>
        		
        		<td>{{$amount=$unit_price * $item->getRelationValue('pivot')->qty}}</td>


        	</tr>
        	@php
        	$total+=$amount;
        	@endphp
        	
			@endforeach

          

        </tbody>
        <tfoot>

          <tr>
            <td colspan="3">Total Amount</td>
            <td>
              {{$total}}
            </td>
            
          </tr>

          
        </tfoot>

      </table>

    </div> 
  </div>



@endsection