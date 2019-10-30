

<!--/header-->
<?php include('inc/header.php'); ?>
<div class="content">
	 <div class="container">
		 <div class="content-grids">
			 
		 	<div class="col-md-8 content-main">

					<?php
						include("inc/connect.php");
						if(isset($_GET['name'])){

							$name = $_GET['name'];

							$select_posts = "SELECT * FROM posts where post_author = '$name'";
							$run_posts = mysqli_query($con, $select_posts);
								
							while($row = mysqli_fetch_array($run_posts)){
								$post_id = $row['post_id'];
								$post_title = $row['post_title'];
								$post_date = $row['post_date'];
								$post_author = $row['post_author'];
								$post_image = $row['post_pic'];
									
								$post_content = substr($row['post_body'], 0, 200);
						?>

						<div class="content-grid">					 
							<div class="content-grid-info pbody">
								<img src="images/<?php echo $post_image; ?>" alt=""/>
								<div class="post-info">
									<h4><a href="single.php?id=<?php echo $post_id; ?>"><?php echo $post_title; ?></a>  <?php echo $post_date; ?></h4>
									<p><?php echo $post_content; ?></p>
									<a href="single.php?id=<?php echo $post_id; ?>"><span></span>READ MORE</a>
								</div>
							</div>
						</div>
					<?php } }?>
				</div>

			  <div class="col-md-4 content-right">
				<?php include('inc/recentpost.php'); ?>
				 <div class="comments">
					 <h3>RECENT COMMENTS</h3>
					 <ul>
					 <li><a href="#">Amada Doe </a> on <a href="#">Hello World!</a></li>
					 <li><a href="#">Peter Doe </a> on <a href="#"> Photography</a></li>
					 <li><a href="#">Steve Roberts  </a> on <a href="#">HTML5/CSS3</a></li>
					 </ul>
				 </div>
				 <div class="clearfix"></div>
				
				 <div class="categories">
					 <h3>CATEGORIES</h3>
					 <ul>
					 <li><a href="#">Education</a></li>
					 <li><a href="#">International</a></li>
					 <li><a href="#">Career</a></li>
					 <li><a href="#">Campus</a></li>
					 <li><a href="#">Extra-curriculam</a></li>
					 <li><a href="#">Sports</a></li>
					 </ul>
				 </div>
				 <div class="clearfix"></div>
			  </div>
			  <div class="clearfix"></div>
		  </div>
	  </div>
</div>
<!---->
<?php include('inc/footer.php'); ?>
	
