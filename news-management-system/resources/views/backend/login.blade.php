<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>ADMIN DASHBOARD | WEBN NEWS</title>
	<link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('css/font-awesome.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('css/adminstyle.css')}}">	
</head>
<body>

	<div class="logo text-center">
		<a href="WEBNNEWS.com"><img src="images/newsweb_logo.png" width="50%"></a>
	</div>
	<div class="login-box">
		<form method="POST" action="{{ route('login') }}">
            @csrf
			<div class="form-group">
				<label>Username or Email Address</label>
				<input type="text" class="form-control" name="username">
			</div>
			<div class="form-group">
				<label>Password</label>
				<input type="password" class="form-control" name="username">
			</div>
			<div class="form-group">
				<label for="remember"><input type="checkbox" name="remember" id="remember"> <span class="remember">Remember Me</span></label>
				<input type="submit" class="btn btn-info pull-right" value="Log In">
			</div>
		</form>
	</div>

	<div class="more-links">
		<p>
			<a href="#">Lost your password?</a> 
			<a href="#" class="pull-right">← Back to Site</a>
		</p>
	</div>


</body>
</html>	