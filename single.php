
<?php
	include('inc/header.php'); 
?>

<div class="single">
	<div class="container">
		<div class="col-md-8 single-main">				 
			<div class="single-grid pbody">
				<?php
					include('inc/connect.php');
					if(isset($_GET['id'])){
						
						$page_id = $_GET['id'];
						$_SESSION['post_id'] = $page_id;
						
						$select_query = "SELECT * FROM posts WHERE post_id = '$page_id'";
						
						$run_query = mysqli_query($con, $select_query);
						
						while($row = mysqli_fetch_array($run_query)){
							$post_id = $row['post_id'];
							$_SESSION['post_id'] = $post_id;
							$u = $_SESSION['post_id'];
							$post_title = $row['post_title'];
							$post_date = $row['post_date'];
							$post_author = $row['post_author'];
							$post_image = $row['post_pic'];
							
							$post_content = $row['post_body'];
				?>
				<div class="post-info">
					<h4><a href="single.php"><?php echo $post_title; ?></a>  <?php echo $post_date; ?></h4><br>
					<img src="images/<?php echo $post_image;?>">
					
					<p><?php echo $post_content; ?></p>
				</div>
				
			</div>
			 <ul class="comment-list">
		  		   <h5 class="post-author_head">Written by <a href="#" title="Posts by admin" rel="author"><?php echo $post_author; ?></a></h5>
		  		   <li><img src="images/avatar.png" class="img-responsive" alt="">
		  		   <div class="desc">
		  		   <p>View all posts by: <a href="authorPage.php?name=<?php echo $post_author;?>" title="Posts by admin" rel="author"><?php echo $post_author; ?></a></p>
		  		   </div>
		  		   <div class="clearfix"></div>
		  		   </li>
		  	  </ul>
		  	  <?php } }?>
			  <div class="content-form">
					<h3>Leave a comment</h3>
					<form action="single.php" method = "post">
						<div class="form-group">
						    <textarea name="body" class="form-control" rows="5"></textarea>
						 </div>						 
						<button name="submit" type="submit" class="btn btn-info">Submit</button>
					 </form>
			   </div>
		  </div>

			  <div class="col-md-4 side-content">
				 <?php include('inc/recentpost.php'); ?>
				 
				 <div class="clearfix"></div>
				 
				 <div class="categories">
					<h3>CATEGORIES</h3>
					<ul>  
					  <li><a href="category.php?id=Education">Education</a></li>
					  <li><a href="category.php?id=International">International</a></li>
					  <li><a href="category.php?id=Career">Career</a></li>
					  <li><a href="category.php?id=Campus">Campus</a></li>
					  <li><a href="category.php?id=Extra-curriculum">Extra-curriculum</a></li>
					  <li><a href="category.php?id=Sports">Sports</a></li>
					</ul>
					
				 </div>
				 <div class="clearfix"></div>
			  </div>
			  <div class="clearfix"></div>
			  <?php include('comment.php'); ?>
		  </div>
	  </div>

<!---->
<?php include('inc/footer.php'); ?>
<?php
	if(isset($_POST['submit'])){
		$post = $_SESSION['post_id'];
		if(!isset($_SESSION['username'])){
			echo "<script>alert('You need to login first to post a comment!')</script>";
			echo "<meta http-equiv=\"refresh\" content=\"0; url=http://localhost/news_portal/single.php?id=$post\">";
		}
		else{
			$body = $_POST['body'];
			$username = $_SESSION['username'];
			
			if($body){
				$sql = "INSERT INTO `comments`(`comment_body`, `post_id`, `username`) VALUES ('$body','$post','$username')";
				$run = mysqli_query($con, $sql);
				echo "<meta http-equiv=\"refresh\" content=\"0; url=http://localhost/news_portal/single.php?id=$post\">";
			}
			else{
				echo "<script>alert('Write something to comment!')</script>";
				echo "<meta http-equiv=\"refresh\" content=\"0; url=http://localhost/news_portal/single.php?id=$post\">";
			}
		}
	}
	
?>

	
