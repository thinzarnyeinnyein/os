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
					<form>
						<div class="form-group row">
							<label class="col-md-4">Product Name</label>
							<div class="col-md-6">
								<strong>{{$items->name}}</strong>
							</div>
						</div>
						
						<div class="form-group row">
							<label class="col-md-4">Price:</label>
							<div class="col-md-6">
								<strong>{{$items->name}}</strong>
							</div>
						</div>
						<div class="form-group row">
							<label class="col-md-4">Description:</label>
							<div class="col-md-6">
								<strong>{{$items->description}}</strong>
							</div>
						</div>
						<div class="form-group row">
							<label class="col-md-4">Qty</label>
							<input type="number" name="qty" id="qty" class="form-control w-25 d-inline-block">
							
						</div>
					</form>
					
					<a href="#" class="btn btn-info btn-sm">Add to Cart</a>

					
				</div>
				
			</div>
		</div>
	
		
	</div>

 
@endsection

@section('script')
<script type="text/javascript" src="{{asset('frontend/js/script.js')}}"></script>


@endsection