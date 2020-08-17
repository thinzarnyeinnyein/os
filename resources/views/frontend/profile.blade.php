@extends('frontendtemplate')

@section('content')
	<div class="col-lg-9">
		<h2 class="text-center my-3">Profile Page</h2>
		<div class="container my-5">
			<form action="" method=""post>
				
				{{-- <div class="form-group">
					<img src="backend/itemimg/1597292436.jpeg" class="img-fluid w-25">
					
				</div> --}}
				<div class="form-group">
					<input type="text" class="form-control" placeholder="Name" name="user_name" value="{{Auth::user()->name}}">
					
				</div>
				<div class="form-group">
					<input type="email" class="form-control" placeholder="Email Address" name="user_email" value="{{Auth::user()->email}}">

					
				</div>
				{{-- <div class="form-group">
					<input type="password" class="form-control" placeholder="Password" name="user_password" value=".....">
					
				</div>
				<div class="form-group">
					<input type="password" class="form-control" placeholder="Confirm Password" name="user_cpassword" value=".....">
					
				</div> --}}
				
				<input type="submit" class="btn btn-primary btn-sm" value="Save">
                  
				

				
			</form>
			
		</div>

		
		
	</div>


@endsection