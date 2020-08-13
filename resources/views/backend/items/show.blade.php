@extends('backendtemplate')
@section('content')
<div class="container-fluid">
	<h2>Item Show (UI)</h2>

	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<p><img src="{{asset($item->photo)}}" class="img-fluid w-50"></p>
				
			</div>
			<div class="col-md-6">
				<table>
					<tr>
						<td>Product Name</td>
						<td>{{$item->name}}</td>
						
					</tr>
					<tr>
						<td>Product Code</td>
						<td>{{$item->codeno}}</td>
						
					</tr>
					<tr>
						<td>Product Price</td>
						<td>{{$item->price}}</td>
						
					</tr>
					<tr>
						<td>Description</td>
						<td>{{$item->description}}</td>
						
					</tr>


				</table>
				

				
			</div>
			
		</div>
		
	</div>
	
</div>
@endsection