@extends('frontendtemplate')
@section('content')
<div class="col-lg-9">
	
	<div class="row py-3">
		<div class="offset-4 col-md-4">
			<h2 class="pt-4">Your Profile</h2>
			<img src="backend/itemimg/1597330150.jpeg" 
			style="
			vertical-align: middle;
			width: 100px;
			height: 100px;
			border-radius: 50%;
			text-align: center;" class="text-center d-inline-block">
		</div>
	</div>
	<h6 class="text-center">{{Auth::user()->name}} </h6> 
	<h6 class="text-center">{{Auth::user()->email}} </h6>

</div>
@endsection