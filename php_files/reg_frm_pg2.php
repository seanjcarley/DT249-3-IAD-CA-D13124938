<?php
	session_start();
	
	/*set variables*/
	$lpn = $_POST['lpn'];
	$make = $_POST['make'];
	$model = $_POST['model'];
	$class = $_POST['class'];
	$coun = $_POST['coun'];
	
	/*create and add variables to value_arr*/
	/*$values_arr2 = array($lpn, $make, $model, $class, $coun);*/
	
	/*add array to SESSION*/
	/*$_SESSION['values_arr2'] = $values_arr2;*/
	
	/*create session variables*/
	$_SESSION['lpn'] = $lpn;
	$_SESSION['make'] = $make;
	$_SESSION['model'] = $model;
	$_SESSION['class'] = $class;
	$_SESSION['coun'] = $coun;
	
	/*testing*/
	/*echo $_SESSION['values_arr2'];*/
	
	/*progress to step 3*/
	header("location: ../reg_frm3.php");
	
?>
