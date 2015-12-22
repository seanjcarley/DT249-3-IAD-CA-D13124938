<?php
	//Start session
	session_start();
	
	//Include database connection details
	require_once('config.php');
	
	//Array to store validation errors
	$errmsg_arr = array();
	
	//Validation error flag
	$errflag = false;
	
	//Connect to mysql server
	$conn = new mysqli(DB_HOST, DB_USER, DB_PASSWORD,DB_DATABASE);
    if ($conn->connect_error) die($conn->connect_error);
	
	//Select database
	
	
	//Function to sanitize values received from the form. Prevents SQL injection
	function clean($str, $connection) {
		return $connection->real_escape_string($str);
	}
	
	//Sanitize the POST values
	$uname = clean($_POST['uname'],$conn);
	$pword = clean($_POST['pword'],$conn);
	
	//Input Validations
	if($uname == '') {
		$errmsg_arr[] = 'Login ID missing';
		$errflag = true;
	}
	if($pword == '') {
		$errmsg_arr[] = 'Password missing';
		$errflag = true;
	}
	
	//If there are input validations, redirect back to the login form
	if($errflag) {
		$_SESSION['ERRMSG_ARR'] = $errmsg_arr;
		session_write_close();
		header("location: login-form.php");
		exit();
	}
	
	//Create query
	$qry="SELECT * FROM customer WHERE USERNAME='$uname' AND PASSWORD='".md5($_POST['pword'])."'";
	$result = $conn->query($qry);
    if (!$result) die ("Database access failed: " . $conn->error);
	
	//Check whether the query was successful or not
	
	if($result->num_rows == 1) {
			//Login Successful
		session_regenerate_id();
		$member = $result->fetch_array(MYSQLI_ASSOC);
		$_SESSION['SESS_MEMBER_ID'] = $member['CUSTID'];
		$_SESSION['SESS_FIRST_NAME'] = $member['FIRST_NAME'];
		$_SESSION['SESS_LAST_NAME'] = $member['SURNAME'];
		session_write_close();
			
			//echo $member['member_id'];
		header("location: ..\dashboard.php");
		exit();
	}else {
		//Login failed
		header("location: ..\loginf.php");
		exit();
	}
	
?>