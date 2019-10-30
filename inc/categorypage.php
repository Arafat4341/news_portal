<div class="col-md-8 content-main">

	<?php
		include("connect.php");
		if(isset($_GET['id'])){
			$cat = $_GET['id'];
			$select_posts = "SELECT * FROM posts where post_category = '$cat'";
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
	<?php }} ?>
</div>