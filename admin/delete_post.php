<?php
	
	session_start();
	if(!isset($_SESSION['email'])){
		header('location: login.php');
	}

	include("inc/connect.php");
	
	if(isset($_GET['del'])){
		$delete_id = $_GET['del'];
		$delete_query = "delete from posts where post_id = '$delete_id'";
		if(mysqli_query($con, $delete_query)){
			echo "<script>alert('Post has been deleted')</script>";
			echo "<script>window.open('view.php','_self')</script>";
		}
	}
?>