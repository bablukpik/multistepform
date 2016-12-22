<?php 

if(!empty($_POST['village'])){
	$village	 	= $_POST['village'];
	$district 		= $_POST['district'];
	$division 		= $_POST['division'];
	$country 		= $_POST['country'];
	
	setcookie("village", $village, time() + (86400 * 30), "/");
	setcookie("district", $district, time() + (86400 * 30), "/");
	setcookie("division", $division, time() + (86400 * 30), "/");
	setcookie("country", $country, time() + (86400 * 30), "/");
	header("Location: step3.php");
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
			<form action="step2.php" method="post" enctype="multipart/form-data">
				<h2>Registration</h2></br></br>
				<h3>Step-2</h3>
				Village		:<input type="text" name="village" id="user_email" /></br>
				District	:<input type="text" name="district" id="password" /></br>
				Division	:<input type="text" name="division" id="password" /></br>
				Country		:<input type="text" name="country" id="password" /></br>
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