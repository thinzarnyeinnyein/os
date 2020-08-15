@extends('backendtemplate')
@section('content')
<div class="container-fluid">
	<h2 class="d-inline-block">Category List (Table)</h2>

	<a href="{{route('categories.create')}}" class="btn btn-success float-right">Add Category</a>
	<table class="table table-bordered my-5">
		<thead>
			<tr>
				<th>No</th>
				<th>Name</th>
				<th>Photo</th>
				<th>Actions</th>
			</tr>
		</thead>
		<tbody>
			@php $i=1; @endphp
			@foreach($categories as $category)
			<tr>
				<td>{{$i++}}</td>
				<td>{{$category->name}}</td>
				<td><img src="{{$category->photo}}" class="img-fluid" width="100"></td>
				<td>
					<a href="{{route('categories.edit',$category->id)}}" class="btn btn-secondary btn-sm">Edit</a>

					<form method="post" action="{{route('categories.destroy',$category->id)}}" onsubmit="return confirm('Are you sure?')" class="d-inline-block">
						@csrf
						@method('DELETE')
						<input type="submit" name="btnsubmit" value="Delete" class="btn btn-danger btn-sm">
						
					</form>

				</td>
			</tr>
			@endforeach
		</tbody>
		
	</table>
	
</div>
@endsection