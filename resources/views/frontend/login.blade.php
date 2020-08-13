@extends('frontendtemplate')
@section('title','Registration')
@section('content')
<div class="col-lg-9">
	<h2>Login Page</h2>	
	<div class="bg-gradient-primary">
		<div class="container">
			<form action="" method="POST">
				<div class="form-group">
					<input type="email" class="form-control form-control-user" placeholder="Enter Email Address..." name="login_email">
				</div>
				<div class="form-group">
					<input type="password" class="form-control form-control-user" placeholder="Password" name="login_password">
				</div>
				<button class="btn btn-primary btn-user btn-block">
					Login
				</button>
			</form>
			<hr>
			<div class="text-center">
				<a class="small" href="forgot-password.html">Forgot Password?</a>
			</div>
			<div class="text-center">
				<a class="small" href="register.html">Create an Account!</a>
			</div>
		</div>

@endsection
