@extends('backendtemplate')

@section('title','Category Create')

@section('content')

	<div class="container-fluid">
		<h2>Category Create (Form)</h2>
		@if($errors->any())
			<div class="alert alert-danger">
				<ul>
					@foreach ($errors->all() as $error)
					 <li>{{$error}}</li>

					@endforeach
				</ul>				
			</div>
		@endif
		<form method="post" action="{{route('categories.store')}}" enctype="multipart/form-data">
			@csrf  
			{{-- for token--}}
			<div class="form-group">
				<label for="name">Name</label>
				<input type="text" name="cate_name" id="name" class="form-control">				
			</div>
			<div class="form-group">
				<label for="photo">Photo</label>
				<input type="file" name="cate_photo" id="photo" class="form-control-file">
			</div>
			
			<input type="submit" value="Create" class="btn btn-outline-primary">
		</form>

	</div>
@endsection