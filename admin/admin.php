<?php include('inc/adHeader.php'); ?>
<?php
	session_start();
	if(!isset($_SESSION['email'])){
		header('location: login.php');
	}
?>
<div class="body col-md-12">
	<div class="adh container">
		<h1>Welcome Admin!</h1>
	</div>
	
</div>