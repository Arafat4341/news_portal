<?php
	session_start();
	if(!isset($_SESSION['email'])){
		header('location: login.php');
	}
?>
<?php
	include('inc/adHeader.php');
?>
<div class="body col-md-12">
	<div class="adh container">
		<div class="col-md-3"></div>
		<div class="col-md-6 inform">
			<form method="post" action="insert.php" enctype="multipart/form-data">
			  <div class="form-group">
			    <label>Post title</label>
			    <input name="title" type="text" class="form-control" placeholder="title">
			  </div>
			  <div class="form-group">
			    <label>Post category</label>
			    <input name="category" type="text" class="form-control" placeholder="category">
			  </div>
			  <div class="form-group">
			    <label>Post body</label>
			    <textarea name="body" class="form-control" rows="10"></textarea>
			  </div>
			  <div class="form-group">
			    <label for="exampleInputFile">Select a picture</label>
			    <input name = "image" type="file" id="exampleInputFile">
			  </div>
			  
			  <button name="submit" type="submit" class="btn btn-info">Post</button>
			</form>
		</div>
	</div>
	
</div>
<?php
	include('inc/connect.php');
	if(isset($_POST['submit'])){
		$ptitle = $_POST['title'];
		$pcat = $_POST['category'];
		$pbody = $_POST['body'];
		$post_image = $_FILES["image"]["name"];
		$tmp_name = $_FILES['image']['tmp_name'];
		$post_date = date('Y-M-D');
		$em = $_SESSION['email'];
		$st = "SELECT username from admins where email = '$em' ";
		$q = mysqli_query($con, $st);
		$uname = "";
		while($row = mysqli_fetch_array($q)){
			$uname = $row['username'];

		}
		if($ptitle=='' or $pcat=='' or $pbody==''){
			echo "<script>alert('any of the field is empty!')</script>";
			exit();
		}
		else{		
			$location = '../images/';
			move_uploaded_file($tmp_name, $location.$post_image);
			
			$sql = "INSERT INTO posts(post_title, post_category, post_author, post_body, post_pic)
			VALUES('$ptitle','$pcat','$uname','$pbody','$post_image')";
			$query = mysqli_query($con, $sql);
			if($query){
				echo "<script>alert('Insertion successful')</script>";
				echo "<script>window.open('view.php','_self')</script>";
			}
			else{
				echo "something went wrong!";
			}
		}
	}

	
?>