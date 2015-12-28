<?php
	require_once('php_files\user-auth.php');
?>

<!DOCTYPE html>

<html>
	<head>
		<title>pay-a-toll.ie - Welcome</title>
		<meta name="author" content="Seán Carley"/>
		<meta charset="utf-8"/>
		<meta name="viewport" content="width=device-width, initial=scale=1"/>
		<link rel="stylesheet" href="style3.css" type="text/css"/>
	</head>
	
	<body>
		<div class="container">
			<div class="header">
				<div id="logo">Pay-A-Toll.ie</div>
			</div>
			<div class="left">
				<input type="button" value="log Out" onclick="location.href='php_files\logout.php'">
				<br/>
				<input type="button" value="Pay" onclick="location.href=''">
			</div>
			<div class="middle">
			
			</div>
			<div class="right>"></div>
			<div class="bottom">
				<a href="index.php">Home</a>
				<a href="">Site Map</a>
				<a href="mailto:seanjcarley@gmail.com">Contact Us</a>
				<p>Copyright &copy; 2015 Seán Carley</p>
			</div>
		</div>
	</body>
</html>
