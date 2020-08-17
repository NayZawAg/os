@extends('frontendtemplate')
@section('content')
<div class="col-lg-9">
	
	<div class="row py-3">
		<div class="offset-4 col-md-4">
			<h2 class="pt-4">Your Profile</h2>			
		</div>
	<h6 class="text-center">{{Auth::user()->name}} </h6> 
	<h6 class="text-center">{{Auth::user()->email}} </h6>

</div>
@endsection