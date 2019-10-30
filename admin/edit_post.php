<?php
	session_start();
	if(!isset($_SESSION['email'])){
		header('location: login.php');
	}
?>
<?php
	include('inc/adHeader.php');
	include('inc/connect.php');
	if(isset($_GET['edit_form'])){
		$edit_id = $_GET['edit_form'];
		$_SESSION['edit_id'] = $edit_id;
		$edit_query = "SELECT * FROM posts WHERE post_id = '$edit_id'";
		$run_edit = mysqli_query($con, $edit_query);
		while($row = mysqli_fetch_array($run_edit)){
			$post_id = $row['post_id'];
			$post_title = $row['post_title'];
			$post_category = $row['post_category'];
			$post_body = $row['post_body'];
			$post_image = $row['post_pic'];
			$_SESSION['pic'] = $post_image;
				
								
?>
<div class="body col-md-12">
	<div class="adh container">
		<div class="col-md-3"></div>
		<div class="col-md-6 inform">
			<form method="post" action="edit_post.php" enctype="multipart/form-data">
			  
			  <div class="form-group">
			    <label>Post title</label>
			    <input name="title" type="text" class="form-control" value="<?php echo $post_title; ?>">
			  </div>
			  <div class="form-group">
			    <label>Post category</label>
			    <input name="category" type="text" class="form-control" value="<?php echo $post_category; ?>">
			  </div>
			  <div class="form-group">
			    <label>Post body</label>
			    <textarea name="body" class="form-control" rows="10"><?php echo $post_body;?></textarea>
			  </div>
			  <div class="form-group">
			    <label for="exampleInputFile">Select a picture</label>
			    <img src="../images/<?php echo $post_image; ?>" height="120" width="120">
			    <input name = "image" type="file" id="exampleInputFile">
			  </div>
			  
			  <button name="edit" type="submit" class="btn btn-info">Update</button>
			</form>
			<?php }} ?>
		</div>
	</div>
	
</div>

<?php
	include('inc/connect.php');
	if(isset($_POST['edit'])){
		$pid = $_SESSION['edit_id'];
		$pic = $_SESSION['pic'];
		$ptitle = $_POST['title'];
		$pcat = $_POST['category'];
		$pbody = $_POST['body'];
		$post_image = $_FILES["image"]["name"];
		$tmp_name = $_FILES['image']['tmp_name'];
		$post_date = date('Y-M-D');
		$a = "abc";
		
		if($ptitle=='' or $pcat=='' or $pbody==''){
			echo "<script>alert('any of the field is empty!')</script>";
		}
		else{
				
			$location = '../images/';
			move_uploaded_file($tmp_name, $location.$post_image);
			if($post_image == ''){
				$sql = "UPDATE posts set post_title = '$ptitle', post_category = '$pcat', post_body = '$pbody', post_pic = '$pic' WHERE post_id = '$pid' ";
			}
			else{
				$sql = "UPDATE posts set post_title = '$ptitle', post_category = '$pcat', post_body = '$pbody', post_pic = '$post_image' WHERE post_id = '$pid' ";
			}
			$query = mysqli_query($con, $sql);
			if($query){
				echo "<script>alert('Successfull Updated')</script>";
				echo "<script>window.open('view.php','_self')</script>";
				
			}
			else{
				echo "Something went wrong!";
			}
		}
	}
	
?>