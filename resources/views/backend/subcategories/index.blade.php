@extends('backendtemplate')
@section('content')
<div class="container-fluid">
	<h2 class="d-inline-block">Subcategory List (Table)</h2>

	<a href="{{route('subcategories.create')}}" class="btn btn-success float-right">Add Subcategory</a>
	<table class="table table-bordered">
		<thead>
			<tr>
				<th>No</th>
				<th>Name</th>
				<th>Category</th>
				<th>Actions</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td>1</td>
				<td>Sub one</td>
				<td>apple</td>
				<td>
					<a href="{{route('subcategories.edit',1)}}" class="btn btn-secondary">Edit</a>
					<a href="#" class="btn btn-secondary">Delete</a>

				</td>
			</tr>
		</tbody>
		
	</table>
	
</div>
@endsection