<?php
	session_start();
?>

<!DOCTYPE html>

<html>
	<head>
		<title>pay-a-toll.ie - home</title>
		<meta name="author" content="Seán Carley"/>
		<meta charset="utf-8"/>
		<meta name="viewport" content="width=device-width, initial=scale=1"/>
		<link rel="stylesheet" href="style3.css" type="text/css"/>
	</head>
	
	<body>
		<div class="container">
		<div class="header">
			<div id="logo">Pay-A-Toll.ie</div>
			<div id="login">
				<form action="php_files/login.php" method="post">
					<table>
						<tr>
							<td><b>Username:</b></td>
							<td><input type="text" name="uname"></td>
						</tr>
						<tr>
							<td colspan="2" align="center"><a href="">Forgot Username</a></td>
						</tr>
						<tr>
							<td><b>Password:</b></td>
							<td><input type="password" name="pword"></td>
						</tr>
						<tr>
							<td colspan="2" align="center"><a href="">Forgot Password</a></td>
						</tr>
						<tr>
							<td align="center"><input type="submit" value="Log In"></td>
							<td align="center"><input type="button" value="Register" onclick="location.href='reg_frm1.php'"></td>
						</tr>
					</table>
				</form>
			</div>
		</div>
		<div class="left"></div>
		<div class="middle"></div>
		<div class="right"></div>
		<div class="footer">
			<a href="">Site Map</a>
			<a href="mailto:seanjcarley@gmail.com">Contact Us</a>
			<p>Copyright &copy; 2015 Seán Carley</p>
		</div>
	</div>
	</body>
</html>
