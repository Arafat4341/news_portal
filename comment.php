<div class="col-md-6 comment">
	<h3>Recent comments:</h3>
	<?php
		include("inc/connect.php");
		$select_posts = "SELECT * FROM comments where post_id = '$u' ORDER BY 1 desc LIMIT 0,3";
		$run_posts = mysqli_query($con, $select_posts);
			
		while($row = mysqli_fetch_array($run_posts)){
			$comment_id = $row['id'];
			$comment_body = $row['comment_body'];
			$username = $row['username'];
	?>

	<div class="content-grid">					 
		<div class="content-grid-info pbody cbody">
			
			<div class="post-info">
				<h5><a href=""><?php echo $username; ?></a></h5>
				<p><?php echo $comment_body; ?></p>
			</div>
		</div>
	</div>
	<?php } ?>
</div>