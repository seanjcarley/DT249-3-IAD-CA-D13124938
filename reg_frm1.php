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
		<script type="text/javascript" src="js_files/validation.js"></script>
	</head>
	
	<body>
		<div class="container">
			<div class="top">
				<div class="logo">Pay-A-Toll.ie</div>
				<div id="desc">
					step 1 of 4
				</div>
			</div>
			<div class="left"></div>
			<div class="middle">
				<form name="form" action="php_files/reg_frm_pg1.php" method="post">
					<table>
						<th colspan="2" align="center">Personal Details</th>
							<tr>
								<td><b>First Name:</b></td>
								<td><input type="text" onblur="valfnme(), pg1cmp()" name="fname"></td>
								<td id="fnameval">**Please enter your name!**</td>
							</tr>
							<tr>
								<td><b>Surname:</b></td>
								<td><input type="text" onblur="valsnme(), pg1cmp()" name="sname"></td>
								<td id="snameval">**Please enter your surname!**</td>
							</tr>
							<tr>
								<td><b>Email:</b></td>
								<td><input type="text" onblur="valeml(), pg1cmp()" name="email"></td>
								<td id="emailval"></td>
							</tr>
							<tr>
								<td><b>Username:</b></td>
								<td><input type="text" onblur="valunme(), pg1cmp()" name="uname"></td>
								<td id="unameval"></td>
							</tr>
							<tr>
								<td><b>Password:</b></td>
								<td><input type="password" onblur="valpwrd(), pg1cmp()" name="pword"></td>
								<td id="pwordval"></td>
							</tr>
							<tr>
								<td><b>Confirm Password:</b></td>
								<td><input type="password" onkeyup="valcnf(), pg1cmp()" name="conf"></td>
								<td id="confirmval"></td>
							</tr>
							<tr>
								<td id="button1" colspan="2" align="center"><input type="submit" value="Continue"></td>
							</tr>
					</table>
				</form>
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