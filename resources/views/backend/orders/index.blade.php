@extends('backendtemplate')
@section('title','Order List')
@section('content')


<!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Order List</h1>
            <a href="{{route('dashboard')}}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-tachometer-alt fa-sm text-white-50"></i> Dashboard</a>
          </div>

          <!-- Begin Page Content -->
          <div class="container-fluid">



          	<!-- Order List -->
          	<div class="card shadow mb-4">
          		<div class="card-header py-3">
          			<h6 class="m-0 font-weight-bold text-primary">Order List</h6>
          		</div>
          		<div class="card-body">
          			<div class="table-responsive">
          				<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          					<thead>
          						<tr>
          							<th>Voucher No</th>		
          							<th>Total</th>
          							<th>Order Date</th>
          							<th>Notes</th>
          							<th>Action</th>
          						</tr>
          					</thead>
          					<tfoot>
          						<tr>
          							<th>Voucher No</th>		
          							<th>Total</th>
          							<th>Order Date</th>
          							<th>Notes</th>
          							<th>Action</th>
          						</tr>
          					</tfoot>
          					<tbody>
          						 
          						@foreach ($orders as $order) 			
          						
          						<tr>
          							<td>{{$order->voucherno}}</td>
                                             <td>{{$order->total}}</td>
          							<td>{{$order->orderdate}}</td>
          							<td>{{$order->note}}</td>
                                             <td><a href="{{route('orders.show',$order->id)}}" class="btn btn-primary">Detail</a>
                                                  </td>
          						</tr>
          						@endforeach	
          					</tbody>
          				</table>
          			</div>
          		</div>
          	</div>

          </div>
        </div>
@endsection