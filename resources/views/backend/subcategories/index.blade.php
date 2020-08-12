@extends('backendtemplate')
@section('title','Subcategory List')
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
				<th>Action</th>
			</tr>
		</thead>
		<tbody>
			
		</tbody>
	</table>	
</div>
	
@endsection
