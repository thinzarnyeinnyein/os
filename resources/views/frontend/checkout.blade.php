@extends('frontendtemplate')

@section('content')
	<div class="col-lg-9">
		<h2 class="text-center my-3">Your Cart!</h2>
		<div class="container my-5">
			<table class="table table-bordered">
				<thead>
					<tr>
						<th>Item Name</th>
						<th>Photo</th>
						<th>Price</th>
						<th>Qty</th>
						<th>Sub Total</th>
						<th>Total</th>
					</tr>
				</thead>
				<tbody>
					
				</tbody>
				
			</table>
			<div class="row py-4">
				<div class=" col-md-12">
					<div class="form-group">
						<textarea class="form-control notes" placeholder="Notes"></textarea>
						<input type="hidden" name="" class="total">

					</div>

				</div>


			</div>
			<div class="row">
				<div class="col-md-6">
					<a href="{{route('homepage')}}" class="btn btn-danger">Continue Shopping</a>
					
				</div>
				<div class="col-md-6 float-left">
					@auth
				
					<a href="#" class="btn btn-danger btn-sm buy_now">Checkout</a>

					@else
					<a href="{{route('login')}}" class="btn btn-info float-left">Login To Checkout</a>
					@endauth
					
				</div>
				

			</div>
			
		</div>
		
	</div>


@endsection
@section('script')
<script type="text/javascript" src="{{asset('frontend/js/script.js')}}"></script>


@endsection