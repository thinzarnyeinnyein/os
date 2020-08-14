@extends('frontendtemplate')

@section('content')
	<div class="col-lg-9">
		<h2 class="text-center my-5">Login Form</h2>

		<div class="container row my-5">
			
				<form action="" method="post" enctype="multipart/form-data">
					<div class="text-center">
						<h1 class="h4 text-gray-900 mb-4">Welcome</h1>
					</div>
					<div class="form-group">
						<input type="email" class="form-control" name="login_email" placeholder="Enter Email Address...">
					</div>
					<div class="form-group">
						<input type="password" class="form-control" name="login_password" placeholder="Password">
					</div>

					<button type="submit"  class="btn btn-primary btn-sm text-center">
						Login
					</button>


				</form>
				
		</div>
	</div>


@endsection