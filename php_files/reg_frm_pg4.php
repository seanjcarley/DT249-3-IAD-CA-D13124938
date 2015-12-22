<?php
    /*start session*/
    session_start();
    
    /*database connection details*/
    require_once('config.php');
    
    /*get variables from session variables*/
    $fname = $_SESSION['fname'];
	$sname = $_SESSION['sname'];
	$email = $_SESSION['email'];
	$uname = $_SESSION['uname'];
	$pword = $_SESSION['pword'];
	$lpn = $_SESSION['lpn'];
	$make = $_SESSION['make'];
	$model = $_SESSION['model'];
	$class = $_SESSION['class'];
	$coun = $_SESSION['coun'];
	$card = $_SESSION['card'];
	$cnum1 = $_SESSION['cnum1'];
	$cnum2 = $_SESSION['cnum2'];
	$cnum3 = $_SESSION['cnum3'];
	$cnum4 = $_SESSION['cnum4'];
	$cnum = $cnum1.$cnum2.$cnum3.$cnum4;
	$cmnth = $_SESSION['cmnth'];
	$cyear = $_SESSION['cyear'];
	$cexp = $cmnth.$cyear;
	$ccv = $_SESSION['ccv'];
	$cname = $_SESSION['cname'];
	
	//Connect to mysql server
	$conn = new mysqli(DB_HOST, DB_USER, DB_PASSWORD,DB_DATABASE);
    if ($conn->connect_error) die($conn->connect_error);
	
	/*insert in to customer table*/
	$qry = "INSERT INTO customer(CUSTID, FIRST_NAME, SURNAME, EMAIL, USERNAME, PASSWORD) VALUES('', '$fname', '$sname', '$email', '$uname', '".md5($pword)."')";
	$result = $conn->query($qry);
	if (!result) die ("Access failed ".$conn -> error);
	
	/*insert in to vehicle table*/
	$qry = "INSERT INTO vehicle(LICENCEPLATENUMBER, CUSTID, VEHICLEMAKE, VEHICLEMODEL, VEHICLECLASS, COUNTRY) VALUES('$lpn', LAST_INSERT_ID(), '$make', '$model', '$class', '$coun')";
	$result = $conn->query($qry);
	if (!result) die ("Access failed ".$conn -> error);
	
	/*insert in to card table*/
	$qry = "INSERT INTO card(CARDTYPE, CUSTID, CARDNUMBER, CARDEXPIRY, CARDCCV, CARDNAME) VALUES('$card', LAST_INSERT_ID(), '$cnum', '$cexp', '$ccv', '$cname')";
	$result = $conn->query($qry);
	if (!result) die ("Access failed ".$conn -> error);
	
	header("Location: ..\index.php");

?>
