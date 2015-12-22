<?php
	session_start();
	
	/*set variables*/
	$fname = $_POST['fname'];
	$sname = $_POST['sname'];
	$email = $_POST['email'];
	$uname = $_POST['uname'];
	$pword = $_POST['pword'];
	
	/*create and add variables to value_arr*/
	/*$values_arr1 = array($fname, $sname, $email, $uname, $pword);*/
	
	/*add array to SESSION*/
	/*$_SESSION['values_arr1'] = $values_arr1;*/
	
	/*create session variables*/
	$_SESSION['fname'] = $fname;
	$_SESSION['sname'] = $sname;
	$_SESSION['email'] = $email;
	$_SESSION['uname'] = $uname;
	$_SESSION['pword'] = $pword;
	
	/*testing*/
	/*echo $_SESSION['values_arr1'];*/
	
	/*progress to step 2*/
	header("location: ../reg_frm2.php");
	
?>
