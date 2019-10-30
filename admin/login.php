<?php
	include('inc/connect.php');
	session_start();

 ?>

<!DOCTYPE html>
<html>
<head>
<title>Login for Admin panel</title>
<!-- Meta tag Keywords -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Flat Sign Up Form Responsive Widget Template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Meta tag Keywords -->
<!-- css files -->
<link href="css/style3.css" rel="stylesheet" type="text/css" media="all">
<link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" media="all">
<!-- //css files -->
<!-- online-fonts -->
<link href='//fonts.googleapis.com/css?family=Lato:400,100,100italic,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'><link href='//fonts.googleapis.com/css?family=Raleway+Dots' rel='stylesheet' type='text/css'>
</head>
<body>
<!--header-->
	<div class="header-w3l">
		<h1>Login to continue</h1>
	</div>
<!--//header-->
<!--main-->
<div class="main-agileits">
	<h2 class="sub-head">Login</h2>
		<div class="sub-main">	
			<form action="login.php" method="post">
				
				<input placeholder="Email" name="mail" class="mail" type="text" required="">
					<span class="icon1"><i class="fa fa-envelope" aria-hidden="true"></i></span><br>
				<input  placeholder="Password" name="password" class="pass" type="password" required="">
					<span class="icon2"><i class="fa fa-unlock" aria-hidden="true"></i></span><br>
				
				
				<input name="login" type="submit" value="login">
			</form>
		</div>
		<div class="clear"></div>
</div>
<!--//main-->

<!--footer-->
<div class="footer-w3">
	<p>&copy; 2016 Flat Login Form . All rights reserved | Design by <a href="http://w3layouts.com">W3layouts</a></p>
</div>
<!--//footer-->

</body>
</html>

<?php
	include('inc/connect.php');
	$email = @$_POST['mail'];
	$pass = @$_POST['password'];
	$sub = @$_POST['login'];

	if(isset($sub)){
		$sql = mysqli_query($con, "SELECT * from admins where email = '$email' and password = '$pass'");
		$cnt = mysqli_num_rows($sql);
		if($cnt > 0){
			$_SESSION['email'] = $email;
			header('location: admin.php');
		}
		else{
			echo "<script>alert('Incorrect Username or Password!')</script>";
			exit();
		}
	}
?>