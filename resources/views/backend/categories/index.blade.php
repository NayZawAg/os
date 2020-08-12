@extends('backendtemplate')
@section('title','Category List')
@section('content')


<div class="container-fluid">
	<h2 class="d-inline-block">Category List (Table)</h2>
	<a href="{{route('categories.create')}}" class="btn btn-success float-right">Add Category</a>
	<table class="table table-bordered">
		<thead>
			<tr>
				<th>No</th>
				<th>Name</th>
				<th>Action</th>
			</tr>
		</thead>
		<tbody>
			
		</tbody>
	</table>	
</div>
	
@endsection
