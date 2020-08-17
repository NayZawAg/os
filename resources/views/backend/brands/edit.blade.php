@extends('backendtemplate')

@section('content')

	<div class="container-fluid">
		<h2>Brand Edit (Form/Old Value)</h2>
		@if($errors->any())
			<div class="alert alert-danger">
				<ul>
					@foreach ($errors->all() as $error)
					 <li>{{$error}}</li>

					@endforeach
				</ul>				
			</div>
		@endif
		<form method="post" action="{{route('brands.update',$brand->id)}}" enctype="multipart/form-data">
			@csrf  			
			@method('PUT')
					
			</div>
			<div class="form-group">
				<label for="name">Name</label>
				<input type="text" name="brand_name" id="name" class="form-control" value="{{$brand->name}}">				
			</div>
			<div class="form-group">
				<label for="photo">Photo</label>
				<input type="file" name="brand_photo" id="photo" class="form-control-file" value=""> <img src="{{asset($brand->photo)}}" class="w-25">
				<input type="hidden" name="oldphoto" value="{{asset($brand->photo)}}">
			</div>			
			<input type="submit" value="Update" class="btn btn-outline-primary">
		</form>

	</div>
@endsection