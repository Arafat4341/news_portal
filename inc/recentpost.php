
<div class="recent">
	<h3>RECENT POSTS</h3>
	<?php
		include('inc/connect.php');
		$sql = "SELECT * from posts order by 1 desc limit 0,4";
		$run = mysqli_query($con, $sql);
					
		while($row = mysqli_fetch_array($run)){
			$post_id = $row['post_id'];
			$title = $row['post_title'];					
	?>
	<ul>
		<li><a href="single.php?id=<?php echo $post_id;?>"><?php echo $title;?></a></li>
	</ul>
	<?php } ?>
</div>