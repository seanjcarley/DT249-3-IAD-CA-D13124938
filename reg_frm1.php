<?php
	session_start();
?>

<!DOCTYPE html>

<html>
	<head>
		<title>pay-a-toll.ie - registration_form</title>
		<meta name="author" content="Seán Carley"/>
		<meta charset="utf-8"/>
		<meta name="viewport" content="width=device-width, initial=scale=1"/>
		<link rel="stylesheet" href="style3.css" type="text/css"/>
		<script type="text/javascript" src="js_files/emlval.js"></script>
	</head>
	
	<body>
		<div id="top">
			<div id="logo">Pay-A-Toll.ie</div>
			<div id="desc">
				step 1 of 4
			</div>
		</div>
		<div id="left"></div>
		<div id="middle">
			<form name="form" action="php_files/reg_frm_pg1.php" method="post">
				<table>
					<th colspan="2" align="center">Personal Details</th>
						<tr>
							<td><b>First Name:</b></td>
							<td><input type="text" name="fname"></td>
						</tr>
						<tr>
							<td><b>Surname:</b></td>
							<td><input type="text" name="sname"></td>
						</tr>
						<tr>
							<td><b>Email:</b></td>
							<td><input type="text" name="email"></td>
						</tr>
						<tr>
							<td><b>Username:</b></td>
							<td><input type="text" name="uname"></td>
						</tr>
						<tr>
							<td><b>Password:</b></td>
							<td><input type="password" name="pword"></td>
						</tr>
						<tr>
							<td><b>Confirm Password:</b></td>
							<td><input type="password" name="conf"></td>
						</tr>
						<tr>
							<td colspan="2" align="center"><input type="submit" value="Continue"></td>
						</tr>
				</table>
			</form>
		</div>
		<div id="right>"></div>
		<div id="bottom">
			<a href="index.php">Home</a>
			<a href="">Site Map</a>
			<a href="mailto:seanjcarley@gmail.com">Contact Us</a>
			<p>Copyright &copy; 2015 Seán Carley</p>
		</div>
	</body>
</html>