@extends('frontendtemplate')

@section('content')
	<div class="col-lg-9">
		<h2 class="text-center my-3"> Your Profile</h2>
		<div class="row my-5">
			
			<div class="col-md-6">
				<p>Name:</p>
				<p>Email:</p>
				
			</div>
			<div class="col-md-6">
				<p>{{Auth::user()->name}}</p>
				<p>{{Auth::user()->email}}</p>
				
			</div>

			
		</div>

		
		
	</div>


@endsection