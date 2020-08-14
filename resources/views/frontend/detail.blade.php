@extends('frontendtemplate')

@section('content')
	<div class="col-lg-9">
		<h2 class="my-4 text-center">Item Detail Page</h2>
		<div class="container my-5">
			
			<div class="row">
				<div class="col-md-6">
					<img src="{{asset($items->photo)}}" class="img-fluid w-50">
					
				</div>
				<div class="col-md-6">
					<table class="table">
						<div class="col-md-6">
							<tr>
								<td>Product Name:</td>
								<td>{{$items->name}}</td>

							</tr>
							<tr>
								<td>Price:</td>
								<td>{{$items->price}}</td>
								
							</tr>
							<tr>
								<td>Description:</td>
								<td>{{$items->description}}</td>
								
							</tr>
							<tr>
								<td>Qty:<input type="number" name="qty" id="qty" class="form-control w-25 d-inline-block"></td>
								
							</tr>
							
						</div>

						
					</table>
					<a href="#" class="btn btn-info btn-sm">Add to Cart</a>

					
				</div>
				
			</div>
		</div>
	
		
	</div>

 
@endsection

@section('script')
<script type="text/javascript" src="{{asset('frontend/js/script.js')}}"></script>


@endsection