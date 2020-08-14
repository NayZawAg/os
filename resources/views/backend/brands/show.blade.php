@extends('backendtemplate')
@section('title','Brand Detail')
@section('content')

	<div class="container-fluid">
		<h2>Brand Detail (Your UI)</h2>
		<div class="row">
		<div class="col-md-4">
			<img src="{{asset($brand->photo)}}" class="img-fluid w-75 h-100">
		</div>
		<div class="col-md-8">
			<h5>Brand Name: <span>{{$brand->name}}</span></h5>			
		</div>
	</div>

	</div>
@endsection