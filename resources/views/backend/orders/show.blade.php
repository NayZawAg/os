@extends('backendtemplate')
@section('title','Order Detail')
@section('content')


<!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Order Detail</h1>
            <a href="{{route('dashboard')}}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-tachometer-alt fa-sm text-white-50"></i> Dashboard</a>
          </div>

          <!-- Begin Page Content -->
          <div class="container-fluid">



          	<!-- Order Detail -->
          	<div class="card shadow mb-4">
          		<div class="card-header py-3">
          			<h6 class="m-0 font-weight-bold text-primary">Order Detail</h6>
          		</div>
          		<div class="card-body">
          			<div class="table-responsive">
          				<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          					<thead>
          						<tr>
          							<th colspan="4" class="text-center"><h2>Online Shop</h2>
          								<p>No.123, Mahar Aung Myay Township, Mandalay. Ph-0998745621</p>
          							</th>
          						</tr>
          						<tr>
          							<th>Cashier:</th>
          							<td>Nay Zaw</td>
          							<th>Date:</th>
          							<td>{{$order->orderdate}}</td>
          						</tr>
          						<tr>
          							<th>Voucher:</th>
          							<td>{{$order->voucherno}}</td>
          							<th>Order Date:</th>
          							<td>{{$order->orderdate}}</td>
          						</tr>
          						<tr>
          							<th>Item Name</th>
          							<th>Price</th>
          							<th>Qty</th>
          							<th>Amount</th>
          						</tr>
          						@foreach($order->items as $item)
                                      <tr>
                                        <td> {{$item->name}}</td>
                                        <td>{{$item->price}}</td>
                                        <td>{{$item->pivot->qty}}</td>
                                        <td>{{$item->pivot->qty*$item->price}}</td>
                                        </tr>
                                   @endforeach
                                   <tr>
                                     <th colspan="3">Total</th>
                                     <td>{{$order->total}}</td>
                                   </tr>
          					</thead>
          				</table>
          			</div>
          		</div>
          	</div>
          </div>
        </div>


@endsection