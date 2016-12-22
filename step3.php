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
		<?php 
			echo $_COOKIE['name']."<br>";
			echo $_COOKIE['username']."<br>";
			echo $_COOKIE['email']."<br>";
			echo $_COOKIE['phone']."<br>";
			echo $_COOKIE['village']."<br>";
			echo $_COOKIE['district']."<br>";
			echo $_COOKIE['division']."<br>";
			echo $_COOKIE['country']."<br>";
			
			setcookie("name", "", time()-1, "/");
			setcookie("username", "", time()-1, "/");
			setcookie("email", "", time()-1, "/");
			setcookie("phone", "", time()-1, "/");
			setcookie("village", "", time()-1, "/");
			setcookie("district", "", time()-1, "/");
			setcookie("division", "", time()-1, "/");
			setcookie("country", "", time()-1, "/");
		?>
			<h2>Thanks</h2>
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