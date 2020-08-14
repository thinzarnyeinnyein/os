@extends('backendtemplate')
@section('content')
<div class="container-fluid">
	<h2>Brand Edit (Form/Old value)</h2>

	{{-- @if($errors->any())
	<div class="alert alert-danger">
		<ul>
			@foreach($errors->all() as $error)
			<li>{{$error}}</li>
			@endforeach
		</ul>
		
	</div>
	@endif --}}

	<div class="container">
		<form action="{{route('brands.update',$brand->id)}}" method="post" enctype="multipart/form-data">
			@csrf
			@method('PUT')
			
			<div class="form-group">
				<label>Name</label>
				<input type="text" name="name" value="{{$brand->name}}" class="form-control">
				
			</div>
			
			<div class="form-group">
				<label>Photo</label>
				<input type="file" name="photo" class="form-control-file">
				<img src="{{asset($brand->photo)}}" class="img-fluid w-25 my-3">
				<input type="hidden" name="oldphoto" value="{{$brand->photo}}">
				
			</div>
			
			
			<button type="submit" class="btn btn-outline-primary">Update</button>

			
			
		</form>
		
	</div>
	
</div>
@endsection