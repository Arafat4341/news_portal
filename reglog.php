
<!doctype html>
<html>
<head>
<title>Exquisite Signup Form Flat Responsive widget Template :: w3layouts</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Exquisite Signup Form Widget Responsive, Login form web template,Flat Pricing tables,Flat Drop downs  Sign up Web Templates, Flat Web Templates, Login signup Responsive web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- css files -->
<link href="css/2.css" rel='stylesheet' type='text/css' media="all" />
<!-- /css files -->
<!-- font files -->
<link href='//fonts.googleapis.com/css?family=Raleway:400,100,200,300,500,600,700,800,900' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Muli:400,300' rel='stylesheet' type='text/css'>
<!-- /font files -->
</head>
<body>
<h1 class="header-w3layouts w3 w3l agileinfo">Exquisite Signup Form</h1>
<div class="content-w3ls w3-agileits">
	<div class="inner-agileits1">
		<img src="images/inner.jpg" alt="w3ls" class="inner-w3ls">
		<div class="b-wrapper">
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla diam nisi, malesuada dictum egestas ac, tristique vel ante. </p>
		</div>
	</div>
	<div class="inner-agileits2">
		<div class="form-wthree">
			<form action="#" method="post">
				<div class="form-control"> 
					<label class="header">Your Name :</label>
					<input type="text" id="name" name="name" placeholder="" title="Please enter your Full Name" required="">
				</div>

				<div class="form-control">	
					<label class="header">Email Address :</label>
					<input type="email" id="email" name="email" placeholder="" title="Please enter a valid email" required="">
				</div>

				<div class="form-control">	
					<label class="header">Username</label>
					<input type="text" id="email" name="username" placeholder="" title="Please enter a valid email" required="">
				</div>

				<div class="form-control">	
					<label class="header">Password :</label>
					<input name="pass" type="password" class="lock" name="password" placeholder="" id="password1" required="">
				</div>

				<div class="form-control">	
					<label class="header">Confirm Password :</label>	
					<input name="pass2" type="password" class="lock" name="confirm-password" placeholder="" id="password2" required="">
				</div>	
			
			
				<input name="reg" type="submit" class="register" value="Register">
				
			</form>
		</div>
		<script type="text/javascript">
			window.onload = function () {
				document.getElementById("password1").onchange = validatePassword;
				document.getElementById("password2").onchange = validatePassword;
			}
			function validatePassword(){
				var pass2=document.getElementById("password2").value;
				var pass1=document.getElementById("password1").value;
				if(pass1!=pass2)
					document.getElementById("password2").setCustomValidity("Passwords Don't Match");
				else
					document.getElementById("password2").setCustomValidity('');	 
					//empty string means no validation error
			}
		</script>
	</div>	
	<div class="clear"></div>
</div>
<p class="copyright agileits-w3layouts w3-agile agile">© 2016 Exquisite Signup Form. All Rights Reserved | Design by <a href="https://w3layouts.com/" target="_blank">W3layouts</a></p>
</body>
</html>

<?php
	include('inc/connect.php');
	$reg = @$_POST['reg'];
	$name = strip_tags(@$_POST['name']);
	$em = strip_tags(@$_POST['email']);
	$un = strip_tags(@$_POST['username']);
		
	$pswd = strip_tags(@$_POST['pass']);
	$pswd2 = strip_tags(@$_POST['pass2']);
		
	if (isset($reg)){
		if($pswd == $pswd2){
			if($name && $em && $un){
				$sql = "INSERT INTO `users`(`name`, `email`, `username`, `password`) VALUES ('$name','$em','$un','$pswd')";
				$run = mysqli_query($con, $sql);
				if($run){
					echo "<script>alert('Regestration successful!')</script>";
					echo "<meta http-equiv=\"refresh\" content=\"0; url=http://localhost/news_portal/ulogin.php\">";
				}
			}
			else{
				echo "<script>alert('Some of the fields are empty!')</script>";
			}
		}
		else{
			echo "<script>alert('Passwords don't Match!')</script>";
		}
	}
	
?>