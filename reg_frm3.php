<?php
	session_start();
?>

<!DOCTYPE html>

<html>
	<head>
		<title>pay-a-toll.ie - registration_form - vehicle details</title>
		<meta name="author" content="Seán Carley"/>
		<meta charset="utf-8"/>
		<meta name="viewport" content="width=device-width, initial=scale=1"/>
		<link rel="stylesheet" href="style3.css" type="text/css"/>
	</head>
	
	<body>
		<div id="top">
			<div id="logo">Pay-A-Toll.ie</div>
			<div id="desc">
				step 3 of 4
			</div>
		</div>
		<div id="left"></div>
		<div id="middle">
			<form name="form" action="php_files/reg_frm_pg3.php" method="post">
				<table>
					<th colspan="2" align="center">Payment Details</th>
						<tr>
							<td><b>Card Type:</b></td>
							<td>
								<select name="card">
									<option value="select" selected>Select...</option>
									<option value="MasterCard">MasterCard</option>
									<option value="Visa">Visa</option>
									<option value="Visa Debit">Visa Debit</option>
								</select>

							</td>
						</tr>
						<tr>
							<td><b>Card Number:</b></td>
							<td>
								<input type="text" maxlength="4" name="cnum1" size="1">
								<input type="password" maxlength="4" name="cnum2" size="1">
								<input type="password" maxlength="4" name="cnum3" size="1">
								<input type="text" maxlength="4" name="cnum4" size="1">
							</td>
						</tr>
						<tr>
							<td><b>Expiry Date:</b></td>
							<td><select name="cmnth">
									<option value="select" selected>Select...</option>
									<option value="1">Jan - 01</option>
									<option value="2">Feb - 02</option>
									<option value="3">Mar - 03</option>
									<option value="4">Apr - 04</option>
									<option value="5">May - 05</option>
									<option value="6">Jun - 06</option>
									<option value="7">Jul - 07</option>
									<option value="8">Aug - 08</option>
									<option value="9">Sept - 09</option>
									<option value="10">Oct - 10</option>
									<option value="11">Nov - 11</option>
									<option value="12">Dec - 12</option>
								</select>
								<select name="cyear">
									<option value="select" selected>Select...</option>
									<option value="16">2016</option>
									<option value="17">2017</option>
									<option value="18">2018</option>
									<option value="19">2019</option>
									<option value="20">2020</option>
									<option value="21">2021</option>
								</select>
							</td>
						</tr>
						<tr>
							<td><b>CCV Number:</b></td>
							<td><input type="text" name="ccv"></td>
						</tr>
						<tr>
							<td><b>Name on Card:</b></td>
							<td><input type="text" name="cname"></td>
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
