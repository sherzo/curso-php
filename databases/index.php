<?php
	$dbHost = 'localhost';
	$dbName = 'cursophp';
	$dbUser = 'root';
	$dbPass = 'root';

	try{
		$pdo = new PDO("mysql:host=$dbHost;dbname=$dbName;", "$dbUser", "$dbPass"); 
		$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	} catch(Exception $e){
		echo $e->getMessage();
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Databases</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
</head>
<body>
	<div class="container">
		<h1>Databases</h1>
		<ul>
			<li>
				<a href="">List users</a>
			</li>
			<li>
				<a href="">Add users</a>
			</li>
		</ul>
	</div>
</body>
</html>