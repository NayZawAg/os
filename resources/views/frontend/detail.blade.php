@extends('frontendtemplate')
@section('title','Item Detail')
@section('content')
	<div class="col-lg-9">
		<h2>Item Detail Page</h2>
		<div class="row">
		<div class="col-md-4">
			<img src="" class="img-fluid w-75 h-100">
		</div>
		<div class="col-md-8">
			<h5>Product Name: <span>Cloth</span></h5>
			<h5>Product Code: <span>0001</span></h5>
			<h5>Product Price: <span>25000</span> MMK</h5>
			<h5>Product Discount: <span>20000</span> MMK</h5>
			<h5>Brand Name: <span>Giorano</span></h5>
			<h5>Subcategory: <span>Male</span></h5>
			<h5>Description: <br><span>Thanks</span></h5>
		</div>
	</div>	
	</div>
@endsection
@section('script')
  <script type="text/javascript" src="{{asset('frontend/js/script.js')}}">
    
  </script>
@endsection