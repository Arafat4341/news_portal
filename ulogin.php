<?php
	include('inc/connect.php');
	session_start();

?>
<!DOCTYPE html>
<html>
<head>
<title>Boundary Sign in Form Flat Responsive Widget Template :: w3layouts</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Boundary Sign in Form template Responsive, Login form web template,Flat Pricing tables,Flat Drop downs  Sign up Web Templates, Flat Web Templates, Login sign up Responsive web template, SmartPhone Compatible web template, free WebDesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Custom Theme files -->
<link href="css/3.css" rel="stylesheet" type="text/css" media="all" />
<!-- //Custom Theme files -->
<!-- web font -->
<link href='//fonts.googleapis.com/css?family=Oxygen:400,700' rel='stylesheet' type='text/css'>
<!-- //web font -->
</head>
<body>
	<h1>Login to continue</h1>
<!--form-stars-here-->
		<div class="login-form w3-agile">
			<h2>sign in</h2>
			<form action="#" method="post">
					<p>username</p>
					<input type="text" name="username" placeholder=" " required="" />
					<p>password</p>
					<input type="password" name="password" placeholder="" required="" />
					<input name="login" type="submit" value="sign in">
			</form>
			<a href="#">forgot password?</a>
		</div>
<!--//form-ends-here-->
<!-- copyright -->
	<div class="copyright w3-agile">
		<p> © 2016 Boundary Sign in Form . All rights reserved | Design by <a href="http://w3layouts.com/" target="_blank">W3layouts</a></p>
	</div>
	<!-- //copyright --> 
</body>
</html>

<?php
	include('inc/connect.php');
	$username = @$_POST['username'];
	$pass = @$_POST['password'];
	$sub = @$_POST['login'];

	if(isset($sub)){
		$sql = mysqli_query($con, "SELECT * from users where username = '$username' and password = '$pass'");
		$cnt = mysqli_num_rows($sql);
		if($cnt > 0){
			$_SESSION['username'] = $username;
			header('location: index.php');
		}
		else{
			echo "<script>alert('Incorrect Username or Password!')</script>";
			exit();
		}
	}
?>