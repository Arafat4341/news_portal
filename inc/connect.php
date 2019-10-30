<?php
	$con = mysqli_connect("localhost", "root", "", "newsportal");
	if(!$con){
		echo "<h1>404 not found!</h1>";
	}
?>