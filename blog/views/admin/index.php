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
				<h2>Admin Panel</h2>
				<ul>
					<li>
						<a href="<?php echo BASE_URL; ?>admin/posts">Manage post</a>
					</li>
				</ul>
			</div>
			<div class="col-md-4">
				Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nisi, illum iste explicabo officiis. At nemo quia molestias hic, nulla, optio beatae, perspiciatis cum eveniet deserunt voluptatum enim praesentium reiciendis ducimus!
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">			
				<footer>
					This is a footer<br>
					<a href="<?php echo BASE_URL; ?>admin">Admin panel</a>
				</footer>
			</div>
		</div>
	</div>
</body>
</html>