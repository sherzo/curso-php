<?php 
	include_once '../config.php';

	$query = $pdo->prepare('SELECT * FROM blog_posts ORDER BY id DESC');
	$query->execute();

	$blogPosts = $query->fetchAll(PDO::FETCH_ASSOC);

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Blog with Platzi</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h1>Blog Title</h1>
			</div>
		</div>
		<div class="row">
			<div class="col-md-8">
				<h2>Posts</h2>
				<a class="btn btn-primary" href="insert-post.php">New Post</a>
				<table class="table">
					<thead>
						<tr>
							<th>Title</th>
							<th>Edit</th>
							<th>Delete</th>
						</tr>
					</thead>
					<tbody>
						<?php
							foreach ($blogPosts as $blogPost) {
								echo '<tr>';
								echo '<td>' . $blogPost['title']. '</td>';
								echo '<td><a href="">Edit</a></td>';
								echo '<td><a href="">Delete</a></td>';
								echo '</tr>';
							}
						?>
					</tbody>
				
				</table>
			</div>
			<div class="col-md-4">
				Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nisi, illum iste explicabo officiis. At nemo quia molestias hic, nulla, optio beatae, perspiciatis cum eveniet deserunt voluptatum enim praesentium reiciendis ducimus!
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">			
				<footer>
					This is a footer<br>
					<a href="admin/index.php">Admin panel</a>
				</footer>
			</div>
		</div>
	</div>
</body>
</html>