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
		<table class="table table-hover">
			<tr>
				<th>Post ID</th>
				<th>Post Date</th>
				<th>Post Author</th>
				<th>Post Title</th>
				<th>Post Category</th>
				<th>Delete Post</th>
				<th>Edit Post</th>
				<th>View Post</th>
			</tr>

			<?php
				include("inc/connect.php");
				$query = "select * from posts order by 1 desc";
				$run = mysqli_query($con, $query);
							
				while($row = mysqli_fetch_array($run)){
					$post_id = $row['post_id'];
					$post_date = $row['post_date'];
					$post_author = $row['post_author'];
					$post_title = $row['post_title'];
					$post_category = $row['post_category'];
							
			?>
			<tr>
				<td><?php echo $post_id; ?></td>
				<td><?php echo $post_date; ?></td>
				<td><?php echo $post_author; ?></td>
				<td><?php echo $post_title; ?></td>
				<td><?php echo $post_category; ?></td>
				<td><a href="delete_post.php?del=<?php echo $post_id;?>"><button type="button" class="btn btn-danger">Delete</button></a></td>
				<td><a href="edit_post.php?edit_form=<?php echo $post_id;?>"><button type="button" class="btn btn-info">Edit</button></a></td>
				<td><a href="../single.php?id=<?php echo $post_id;?>"><button type="button" class="btn btn-success">View</button></a></td>
			</tr>
			<?php } ?>

		</table>
	</div>
	
</div>