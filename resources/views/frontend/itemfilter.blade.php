@extends('frontendtemplate')
@section('title','Item Filter')
@section('content')
	<div class="col-lg-9">
		<h2>Items Page Filtered by Brand and Subcategory</h2>	
		<div class="row">
          
          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100">
              <a href="#"><img class="card-img-top" src="" alt=""></a>
              <div class="card-body">
                <h4 class="card-title">
                  <a href="#">Name</a>
                </h4>
                <h5>2500 MMK</h5>
                <p class="card-text">Thanks</p>
              </div>
              <div class="card-footer">
                <a href="#" class="btn btn-info">Add to Cart</a>
                <a href="{{route('detailpage',1)}}" class="btn btn-primary">Detail</a>
              </div>
            </div>
         </div>		
	</div>
@endsection