@extends('backendtemplate')
@section('title','Brand List')
@section('content')


<div class="container-fluid">
	<h2 class="d-inline-block">Brand List (Table)</h2>
	<a href="{{route('brands.create')}}" class="btn btn-success float-right">Add Brand</a>
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
