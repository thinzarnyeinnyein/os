@extends('backendtemplate')
@section('content')
<div class="container-fluid">
	<h2>Subcategory Edit (Form/Old value)</h2>
	<div class="container">
		<form action="{{route('subcategories.update',$subcategory->id)}}" method="post" enctype="multipart/form-data">
			@csrf
			@method('PUT')
			
			<div class="form-group">
				<label>Name</label>
				<input type="text" name="name" value="{{$subcategory->name}}" class="form-control">
				
				
			</div>
			
			<div class="form-group">
				<label>Category</label>
				<select class="form-control" name="category">
					<optgroup label="Choose Category">
						@foreach($categories as $category)
						<option value="{{$category->id}}">{{$category->name}}</option>
						@endforeach

					</optgroup>
				</select>
				
			</div>
		
			<button type="submit" class="btn btn-outline-primary">Submit</button>
		</form>
		
	</div>
</div>
@endsection