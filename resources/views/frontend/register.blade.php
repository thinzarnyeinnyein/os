@extends('frontendtemplate')

@section('content')
	<div class="col-lg-9">
		<h2 class="text-center my-3">Create an Account</h2>
		<div class="container row my-5">
			<form action="" method=""post>
				<div class="form-group">
					<input type="file" class="form-control-file" placeholder="Profile" name="user_profile">
					
				</div>
				<div class="form-group">
					<input type="text" class="form-control" placeholder="Name" name="user_name" value="">
					
				</div>
				<div class="form-group">
					<input type="email" class="form-control" placeholder="Email Address" name="user_email" value="">

					
				</div>
				<div class="form-group">
					<input type="password" class="form-control" placeholder="Password" name="user_password" value="">
					
				</div>
				<div class="form-group">
					<input type="password" class="form-control" placeholder="Confirm Password" name="user_cpassword" value="">
					
				</div>
				<div class="form-group">
					<input type="number" class="form-control" placeholder="Phone Number" name="user_phone" >
					
					
				</div>
				<div class="form-group">
					<textarea class="form-control" placeholder="Address" name="user_address"></textarea>
					
				</div>
				<input type="submit" class="btn btn-primary btn-sm">
                  
				

				
			</form>
			
		</div>
	</div>


@endsection