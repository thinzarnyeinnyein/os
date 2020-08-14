@extends('frontendtemplate')

@section('content')
	<div class="col-lg-9">
		<h2 class="text-center my-3">Profile Page</h2>
		<div class="container my-5">
			<form action="" method=""post>
				<div class="form-group">
					<img src="" class="img-fluid w-25">
					
				</div>
				<div class="form-group">
					<input type="text" class="form-control" placeholder="Name" name="user_name" value="Mg Mg">
					
				</div>
				<div class="form-group">
					<input type="email" class="form-control" placeholder="Email Address" name="user_email" value="mgmg@gmail.com">

					
				</div>
				<div class="form-group">
					<input type="password" class="form-control" placeholder="Password" name="user_password" value=".....">
					
				</div>
				<div class="form-group">
					<input type="password" class="form-control" placeholder="Confirm Password" name="user_cpassword" value=".....">
					
				</div>
				<div class="form-group">
					<input type="number" class="form-control" placeholder="Phone Number" name="user_phone" value="097778363" >
					
					
				</div>
				<div class="form-group">
					<textarea class="form-control" placeholder="Address" name="user_address">Mandalay</textarea>
					
				</div>
				<input type="submit" class="btn btn-primary btn-sm">
                  
				

				
			</form>
			
		</div>

		
		
	</div>


@endsection