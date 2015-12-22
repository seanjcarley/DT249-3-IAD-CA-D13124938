<?php
	session_start();
?>

<!DOCTYPE html>

<html>
	<head>
		<title>pay-a-toll.ie - registration_form - vehicle details</title>
		<meta name="author" content="Seán Carley"/>
		<meta charset="utf-8"/>
		<link rel="stylesheet" href="style3.css" type="text/css"/>
		<meta name="viewport" content="width=device-width, initial=scale=1"/>
	</head>
	
	<body>
		<div id="top">
			<div id="logo">Pay-A-Toll.ie</div>
			<div id="desc">
				step 2 of 4
			</div>
		</div>
		<div id="left">
			<?php
				echo $_SESSION['fname'];
				echo "<br/>";
			?>
		</div>
		<div id="middle">
			<form name="form" action="php_files/reg_frm_pg2.php" method="post">
				<table>
					<th colspan="2" align="center">Vehicle Details</th>
						<tr>
							<td><b>Vehicle Registration Number:</b></td>
							<td><input type="text" name="lpn"></td>
						</tr>
						<tr>
							<td><b>Vehicle Make:</b></td>
							<td><input type="text" name="make"></td>
						</tr>
						<tr>
							<td><b>Vehicle Model</b></td>
							<td><input type="text" name="model"></td>
						</tr>
						<tr>
							<td><b>Vehicle Class:</b></td>
							<td>
								<select name="class">
									<option value="select" selected>Select...</option>
									<option value="1">Class 1</option>
									<option value="2">Class 2</option>
									<option value="3">Class 3</option>
									<option value="4">Class 4</option>
									<option value="5">Class 5</option>
									<option value="6">Class 6</option>
								</select>
							</td>
						</tr>
						<tr>
							<td><b>Country:</b></td>
							<td><input type="text" name="coun"></td>
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
