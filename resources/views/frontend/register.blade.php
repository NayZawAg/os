@extends('frontendtemplate')
@section('title','Registration')
@section('content')
<div class="col-lg-9">
	<h2>Customer Register Page</h2>        
	<form class="user" method="POST" action="backend/signup.php" enctype="multipart/form-data">
		<div class="form-group">
			<input type="file" class="form-control-file mb-3" name="user_profile">                                   
		</div>                 
		<div class="form-group">
			<input type="text" class="form-control form-control-user" placeholder="Name" name="user_name" value="">
		</div>
		<div class="form-group">
			<input type="email" class="form-control form-control-user"  placeholder="Email Address" name="user_email" value="">         
		</div>

		<div class="form-group">
			<input type="password" class="form-control form-control-user"  placeholder="Password" name="user_password" value="">           
		</div>
		<div class="form-group">
			<input type="password" class="form-control form-control-user"  placeholder="Confirm Password" name="user_cpassword"value="">
		</div>
		<div class="form-group">
			<input type="number" class="form-control form-control-user"  placeholder="Phone Number" name="user_phonenumber" value="">    
		</div>
		<div class="form-group">
			<label>Address:</label>
			<textarea class="form-control" name="user_address" value="">
			</textarea>                 
		</div>
		<input type="submit" class="btn btn-primary btn-user btn-block" value="Register Account">                                
	</form>
		<hr>
		<div class="text-center">
			<a class="small" href="forgot-password.html">Forgot Password?</a>
		</div>
		<div class="text-center">
			<a class="small" href="login.html">Already have an account? Login!</a>
		</div>            
 
@endsection