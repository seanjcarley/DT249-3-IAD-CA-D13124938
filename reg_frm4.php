<?php
	session_start();
?>

<!DOCTYPE html>

<html>
	<head>
		<title>pay-a-toll.ie - registration_form - review</title>
		<meta name="author" content="Seán Carley"/>
		<meta charset="utf-8"/>
		<meta name="viewport" content="width=device-width, initial=scale=1"/>
		<link rel="stylesheet" href="style3.css" type="text/css"/>
	</head>
	
	<body>
		<div id="top">
			<div id="logo">Pay-A-Toll.ie</div>
			<div id="desc">
				step 4 of 4
			</div>
		</div>
		<div id="left"></div>
		<div id="middle">
			<form name="form" action="php_files/reg_frm_pg4.php" method="post">
				<table>
					<th colspan="2" align="center">Review</th>
					<tr>Personal Details</tr>
					<tr>
						<td>Name: </td>
						<td>
							<?php
								echo $_SESSION['fname']." ".$_SESSION['sname'];
							?>
						</td>
					</tr>
					<tr>
						<td>Email: </td>
						<td>
							<?php
								echo $_SESSION['email'];
							?>
						</td>
					</tr>
					<tr>
						<td>Username: </td>
						<td>
							<?php
								echo $_SESSION['uname'];
							?>
						</td>
					</tr>
					<tr>Vehicle Details</tr>
					<tr>
						<td>Vehicle Registration Number: </td>
						<td>
							<?php
								echo $_SESSION['lpn'];
							?>
						</td>
					</tr>
					<tr>
						<td>Vehicle Make & Model: </td>
						<td>
							<?php
								echo $_SESSION['make'].": ".$_SESSION['model'];
							?>
						</td>
					</tr>
					<tr>Payment Details</tr>
					<tr>
						<td>Card: </td>
						<td>
							<?php
								echo $_SESSION['card']." ending ".$_SESSION['cnum4'];
								echo " expires on ".$_SESSION['cmnth']."/".$_SESSION['cyear'];
							?>
						</td>
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
