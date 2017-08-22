<?php 
	$result = false;

	if(!empty($_POST)){
		$sql = 'INSERT INTO blog_posts (title, content) VALUES (:title, :content)';
		$query = $pdo->prepare($sql);
		$result = $query->execute([
			'title' => $_POST['title'],
			'content' => $_POST['content']
		]);
	}

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
				<h2>New Post</h2>
				<a class="btn btn-outline-secondary" href="posts.php">Back</a>
				<?php 
				if($result){
					echo '<div class="alert alert-success">Suceess!!</div>';
				}

				?>
				<form action="insert-post.php" method="post">
					<div class="form-group">
						<label for="inputTItle">Title</label>
						<input class="form-control" type="text" name="title" id="inputTitle">
					</div>
					<textarea class="form-control" name="content" id="content" rows="5"></textarea>
					<br>
					<input class="btn btn-primary" type="submit" value="Save">
				</form>
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