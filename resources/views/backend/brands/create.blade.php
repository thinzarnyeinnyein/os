@extends('backendtemplate')
@section('content')
<div class="container-fluid">
	<h2>Brand Create (Form)</h2>

	@if($errors->any())
	<div class="alert alert-danger">
		<ul>
			@foreach($errors->all() as $error)
			<li>{{$error}}</li>
			@endforeach
		</ul>
		
	</div>
	@endif

	<div class="container">
		<form action="{{route('brands.store')}}" method="post" enctype="multipart/form-data">
			@csrf
		
		<div class="form-group">
			<label>Name</label>
			<input type="text" name="name" placeholder="Name" class="form-control">
			
		</div>
		
		<div class="form-group">
			<label>Photo</label>
			<input type="file" name="photo" class="form-control-file">
			
		</div>
		
		
		<button type="submit" class="btn btn-outline-primary">Submit</button>

		
		
	</form>
		
	</div>
	
	

	
</div>
@endsection