<?php
	session_start();
?>

<!DOCTYPE html>

<html>
	<head>
		<title>pay-a-toll.ie - home</title>
		<meta name="author" content="Seán Carley"/>
		<meta charset="utf-8"/>
		<meta name="viewport" content="width=device-width"/>
		<link rel="stylesheet" href="style3.css" type="text/css"/>
		<script src="https://maps.googleapis.com/maps/api/js?"></script>
		<!--<script src="http://maps.googleapis.com/maps/api/js"></script>-->
		<!--<script>
			function initialize(){
				var mapOpt = {
					center:new google.maps.LatLng(51.508742,-0.120850),
					zoom:5,
					mapTypeId:google.maps.MapTypeId.ROADMAP
				};
				var map=new google.maps.Map(document.getElementById("googleMap"),mapOpt);
			}
			google.maps.event.addDomListener(window, 'load', initialize);
		</script>-->
		<script src="js_files\map.js"></script>
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
			<div class="left">
				<img src="images_files\Belfast.png"></img>
				<img src="images_files\Cork.png"></img>
				<img src="images_files\Dublin.png"></img>
				<img src="images_files\Galway.png"></img>
				<img src="images_files\Limerick.png"></img>
			</div>
			<div id="googleMap" style="width:380px;height:380px"></div>
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
