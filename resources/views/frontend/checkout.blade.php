@extends('frontendtemplate')
@section('title','Registration')
@section('content')
	<div class="col-lg-9">
		<h2>Checkout Page</h2>	
		<div id="checkout_body">
			<div class="container my-5 text-center">
				<div class="row">
					<div class="offset-md-2 col-md-9">						
						<div class="table-responsive">
							<table class="table">
								<thead>
									<tr>
										<th>No.</th>
										<th>Item Name</th>
										<th>Photo</th>
										<th>Price</th>
										<th>Qty</th>
										<th>Sub Total</th>
									</tr>
								</thead>
								<tbody>
										

								</tbody>
							</table>
						</div>
					</div>
					
					<div class="offset-md-2 col-md-9">
						<div class="form-group">
							<textarea class="form-control notes" placeholder="Notes"></textarea>						
						</div>

					</div>
					<div class="offset-md-2 col-md-5 text-left">
						<a href="{{route('homepage')}}" class="btn btn-outline-primary">Continue Shopping</a>
					</div>

					<div class="offset-md-2 col-md-3 text-left">
						@auth				
						<a class="btn btn-outline-primary buy_now text-primary">Checkout</a><br>
						@else
						<a href='{{route('login')}}' class='btn btn-outline-info'>Login to Checkout</a>
						@endauth						
					</div>
				</div>
			</div>
		</div>	
	</div>
@endsection
@section('script')
  <script type="text/javascript" src="{{asset('frontend/js/script.js')}}">
    
  </script>
@endsection