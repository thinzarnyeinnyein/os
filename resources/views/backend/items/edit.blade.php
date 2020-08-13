@extends('backendtemplate')
@section('content')
<div class="container-fluid">
	<h2>Item Edit (Form/Old value)</h2>

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
	<form action="{{route('items.update',$item->id)}}" method="post" enctype="multipart/form-data">
			@csrf
			@method('PUT')
			
		<div class="form-group">
			<label>Code No</label>
			<input type="text" name="codeno" value="{{$item->codeno}}"  readonly="" class="form-control">
			
		</div>
		<div class="form-group">
			<label>Name</label>
			<input type="text" name="name" value="{{$item->name}}"  class="form-control">
			
		</div>
		<div class="form-group">
			<label>Price</label>
			<input type="number" name="price" value="{{$item->price}}" class="form-control">
			
		</div>
		<div class="form-group">
			<label>Discount</label>
			<input type="number" name="discount" value="{{$item->discount}}" class="form-control">
			
		</div>
		<div class="form-group">
			<label>Photo</label>
			<input type="file" name="photo" class="form-control-file">
			<img src="{{asset($item->photo)}}" class="img-fluid w-25 my-3">
			<input type="hidden" name="oldphoto" value="{{$item->photo}}">
			
		</div>
		<div class="form-group">
			<label>Description</label>
			<textarea class="form-control" name="description">{{$item->description}}</textarea>
			
		</div>
		<div class="form-group">
			<label>Brand</label>
			<select class="form-control" name="brand">
				<optgroup label="ChooseBrand">
					@foreach($brands as $brand)
					<option value="{{$brand->id}}"
						@if($brand->id==$item->brand_id)
						{{'selected'}}
						@endif

						>{{$brand->name}}</option>
					@endforeach
					
				</optgroup>
				
			</select>
			
		</div>
		<div class="form-group">
			<label>Subcategory</label>
			<select class="form-control" name="subcategory">
				<optgroup label="ChooseSubcategory">
					@foreach($subcategories as $subcategory)

					<option value="{{$subcategory->id}}"
						@if($subcategory->id==$item->subcategory_id)
						{{'selected'}}
						@endif


						>{{$subcategory->name}}</option>
					@endforeach
					
				</optgroup>
				
			</select>
			
		</div>
		<button type="submit" class="btn btn-outline-primary">Update</button>

		
		
	</form>
		
	</div>
	
</div>
@endsection