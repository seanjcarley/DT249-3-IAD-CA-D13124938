<?php
	session_start();
	
	/*set variables*/
	$card = $_POST['card'];
	$cnum1 = $_POST['cnum1'];
	$cnum2 = $_POST['cnum2'];
	$cnum3 = $_POST['cnum3'];
	$cnum4 = $_POST['cnum4'];
	$cmnth = $_POST['cmnth'];
	$cyear = $_POST['cyear'];
	$ccv = $_POST['ccv'];
	$cname = $_POST['cname'];
	
	/*create and add variables to value_arr*/
	/*$values_arr3 = array($card, $cnum1, $cnum2, $cnum3, $cnum4, $cmnth, $cyear, $ccv, $cname);*/
	
	/*add array to SESSION*/
	/*$_SESSION['values_arr3'] = $values_arr3;*/
	
	/*create session variables*/
	$_SESSION['card'] = $card;
	$_SESSION['cnum1'] = $cnum1;
	$_SESSION['cnum2'] = $cnum2;
	$_SESSION['cnum3'] = $cnum3;
	$_SESSION['cnum4'] = $cnum4;
	$_SESSION['cmnth'] = $cmnth;
	$_SESSION['cyear'] = $cyear;
	$_SESSION['ccv'] = $ccv;
	$_SESSION['cname'] = $cname;
	
	/*testing*/
	/*echo $_SESSION['values_arr3'];*/
	
	/*progress to step 4*/
	header("location: ../reg_frm4.php");
	
?>
