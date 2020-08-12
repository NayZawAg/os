@extends('backendtemplate')

@section('title','Subcategory Create')

@section('content')

	<div class="container-fluid">
		<h2>Subcatgory Create (Form)</h2>
		@if($errors->any())
			<div class="alert alert-danger">
				<ul>
					@foreach ($errors->all() as $error)
					 <li>{{$error}}</li>

					@endforeach
				</ul>				
			</div>
		@endif
		<form method="post" action="{{route('subcategories.store')}}">
			@csrf  
			{{-- for token--}}
			
			<div class="form-group">
				<label for="name">Name</label>
				<input type="text" name="subcate_name" id="name" class="form-control">				
			</div>
			
			<div class="form-group">
				<label for="cate">Category</label>
				<select name="category_id" class="form-control" id="cate">
					<optgroup label="Choose Category">
						@foreach($categories as $category)
						<option value="{{$category->id}}">{{$category->name}}</option>
						@endforeach			
					</optgroup>				
				</select>					
			</div>
			
			<input type="submit" value="Create" class="btn btn-outline-primary">
		</form>

	</div>
@endsection