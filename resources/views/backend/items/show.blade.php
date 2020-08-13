@extends('backendtemplate')
@section('title','Item Detail')
@section('content')

	<div class="container-fluid">
		<h2>Item Detail</h2>
	<div class="row">
		<div class="col-md-4">
			<img src="{{asset($item->photo)}}" class="img-fluid w-75 h-100">
		</div>
		<div class="col-md-8">
			<h5>Product Name: <span>{{$item->name}}</span></h5>
			<h5>Product Code: <span>{{$item->codeno}}</span></h5>
			<h5>Product Price: <span>{{$item->price}}</span></h5>
			<h5>Product Discount: <span>{{$item->discount}}</span></h5>
			<h5>Brand Name: <span>{{$item->brand->name}}</span></h5>
			<h5>Subcategory: <span>{{$item->subcategory->name}}</span></h5>
			<h5>Description: <br><span>{{$item->description}}</span></h5>
		</div>
	</div>


	</div>
@endsection