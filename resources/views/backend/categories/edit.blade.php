@extends('backendtemplate')
@section('content')
<div class="container-fluid">
	<h2>Category Edit (Form/Old value)</h2>

	<div class="container">
		<form action="{{route('categories.update',$category->id)}}" method="post" enctype="multipart/form-data">
			@csrf
			@method('PUT')
			
			<div class="form-group">
				<label>Name</label>
				<input type="text" name="name" value="{{$category->name}}" class="form-control">
				
			</div>
			
			<div class="form-group">
				<label>Photo</label>
				<input type="file" name="photo" class="form-control-file">
				<img src="{{asset($category->photo)}}" class="img-fluid w-25 my-3">
				<input type="hidden" name="oldphoto" value="{{$category->photo}}">
				
			</div>
			
			
			<button type="submit" class="btn btn-outline-primary">Update</button>
		</form>
		
	</div>
	
</div>
@endsection