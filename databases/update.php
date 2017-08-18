<?php 
	include_once 'config.php';

	$result = false;
	
	if(!empty($_POST)){
		
		// Si no esta vacio $_POST, actualizo el registro

		$id = $_POST['id'];
		$newName = $_POST['name'];
		$newEmail = $_POST['email'];

		$sql = "UPDATE users SET name = :name, email = :email WHERE id = :id";
		$query = $pdo->prepare($sql);

		$result = $query->execute([
			'id' => $id,
			'name' => $newName,
			'email' => $newEmail,
		]);

		$nameValue = $newName;
		$emailValue = $newEmail;

	}else {

		// Sino la peticion es GET y consulto al BD para mostrar

		$id = $_GET['id'];
		$sql = "SELECT * FROM users WHERE id = :id";
		$query = $pdo->prepare($sql);

		$query->execute([
			'id' => $id
			]);

		$row = $query->fetch(PDO::FETCH_ASSOC);

		$nameValue = $row['name'];
		$emailValue = $row['email'];
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Databases with Platzi</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
</head>
<body>
	<div class="container">
		<h1>Update User</h1>
		<a href="list.php">Back</a>
		<?php
			if($result){	
				echo '<div class="alert alert-success" role="alert">Success!!!</div>';
			}
		?>
		<form action="update.php" method="post">
			<label for="name">Name</label>
			<input type="text" name="name" id="name" value="<?php echo $nameValue ?>">
			<br>
			<label for="email">Email</label>
			<input type="text" name="email" id="email" value="<?php echo $emailValue ?>">
			<input type="hidden" name="id" value="<?php echo $id ?>">
			<br>
			<input type="submit" value="Update">
		</form>
	</div>
</body>
</html>