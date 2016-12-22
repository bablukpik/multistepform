<?php 
	
	if(!empty($_POST['email'])){
		$name 		= $_POST['name'];
		$username 	= $_POST['username'];
		$email 		= $_POST['email'];
		$phone 		= $_POST['phone'];
		
		setcookie("name", $name, time() + (86400 * 30), "/");
		setcookie("username", $username, time() + (86400 * 30), "/");
		setcookie("email", $email, time() + (86400 * 30), "/");
		setcookie("phone", $phone, time() + (86400 * 30), "/");
		header("Location: step2.php");
		}
		
		if(isset($_COOKIE['username'])){
			header("Location: step2.php");
		}
		
	
?>

<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<title>This is a title</title>
	<link rel="stylesheet" href="style.css" />
	
</head>
<body>
	<header id="header">
	</header>
	<div id="container">
		<main id="center" class="column">
			<form action="step1.php" method="post" enctype="multipart/form-data">
				<h2>Registration</h2></br></br>
				<h3>Step-1</h3>
				Name		:<input type="text" name="name" id="user_email" /></br>
				Username	:<input type="text" name="username" id="password" /></br>
				E-mail		:<input type="email" name="email" id="password" /></br>
				Phone	:<input type="text" name="phone" id="password" /></br>
				<button type="submit" name="btn-login" >Submit</button> 
			</form>
		</main>
		<nav id="left" class="column">
			<h3>Left Sidebar</h3>
		</nav>
		<div id="right" class="column">
			<h3>Right Sidebar</h3>
		</div>
	</div>
	<div id="footer-wrapper">
		<footer id="footer"><p>Footer...</p></footer>
	</div>
</body>
</html>