@extends('backendtemplate')
@section('title','Category Edit')
@section('content')

	<div class="container-fluid">
		<h2>Category Edit (Form/Old Value)</h2>
		@if($errors->any())
			<div class="alert alert-danger">
				<ul>
					@foreach ($errors->all() as $error)
					 <li>{{$error}}</li>

					@endforeach
				</ul>				
			</div>
		@endif
		<form method="post" action="{{route('categories.update',$category->id)}}" enctype="multipart/form-data">
			@csrf  			
			@method('PUT')
					
			</div>
			<div class="form-group">
				<label for="name">Name</label>
				<input type="text" name="category_name" id="name" class="form-control" value="{{$category->name}}">				
			</div>
			<div class="form-group">
				<label for="photo">Photo</label>
				<input type="file" name="category_photo" id="photo" class="form-control-file" value=""> <img src="{{asset($category->photo)}}" class="w-25">
				<input type="hidden" name="oldphoto" value="{{asset($category->photo)}}">
			</div>			
			<input type="submit" value="Update" class="btn btn-outline-primary">
		</form>

	</div>
@endsection