<?php 
	$user = null;
	$query = null;

	if(!empty($_POST)){
		require_once 'config.php';

		/* 
		METODO INSEGURO PARA SQL INJECTION

		$query = "SELECT * FROM users WHERE email = '". $_POST['email'] ."' AND password = '" . md5($_POST['password']) ."'";

		$queryResult = $pdo->query($query);

		$user = $queryResult->fetch(PDO::FETCH_ASSOC);

		*/

		$query = "SELECT * FROM users WHERE email = :email AND password = :password";
		$prepared = $pdo->prepare($query);
		$prepared->execute([
			'email' => $_POST['email'],
			'password' => md5($_POST['password'])
		]);

		$user = $prepared->fetch(PDO::FETCH_ASSOC);

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
		<h1>Fake login</h1>
		<a href="index.php"></a>
		<form action="fake-login.php" method="post">
			<label for="email">Email</label>
			<input type="text" name="email" id="email">
			<br>
			<label for="">Password</label>
			<input type="password" name="password" id="password">
			<br>
			<input type="submit" value="Login">
		</form><br>
		<h2>Query</h2>
		<div>
			<?php 
				print_r($query);
			?>
		</div>
		<h2>User Data</h2>
		<div>
			<?php 
				print_r($user);
			?>
		</div>
	</div>
</body>
</html>