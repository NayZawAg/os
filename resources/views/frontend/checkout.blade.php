@extends('frontendtemplate')
@section('title','Registration')
@section('content')
	<div class="col-lg-9">
		<h2>Checkout Page</h2>	
		<div id="checkout_body">
			<div class="container my-5 text-center">
				<div class="row">
					<div class="offset-md-2 col-md-8">						
						<div class="table-responsive">
							<table class="table">
								<thead>
									<tr>
										<th>No.</th>
										<th>Item Name</th>
										<th>Price</th>
										<th>Qty</th>
										<th>Sub Total</th>
									</tr>
								</thead>
								<tbody>
										<td>1</td>
										<td>Cloth</td>
										<td>25000 MMK</td>
										<td>1</td>
										<td>25000 MMK</td>

								</tbody>
							</table>
						</div>
					</div>
					

					<div class="offset-md-2 col-md-4 text-left">
						<a href="product1.php" class="btn btn-outline-primary">Continue Shopping</a>
					</div>
					<div class="offset-md-2 col-md-4 text-left">				
						<a class="btn btn-outline-primary buy_now text-primary">Buy Now</a><br>							
						<a href='login.php' class='btn btn-outline-info'>Login to Buy</a>						
					</div>
				</div>
			</div>
		</div>	
	</div>
@endsection