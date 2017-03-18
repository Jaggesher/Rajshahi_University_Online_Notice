<?php


	$userID=$_POST["userID"];
	$userName=$_POST["userName"];
	$userPassword=$_POST["userPassword"];

	$birthdate= date("m/d/Y", strtotime($_POST["birthdate"]));
	$dateObj = DateTime::createFromFormat('m/d/Y', $birthdate);
	$birthdate = $dateObj->format('Y/m/d');

	$UserType=$_POST["UserType"];
	$userDept=$_POST["userDept"];
	$Hall=$_POST["Hall"];
	if($UserType!="3"){
		$Hall="";
	}

	include 'dbconnect.php';

	$sql="INSERT INTO account VALUES('','$userID','$userName','$userPassword','$birthdate','$userDept','$Hall','$UserType','pending')";
	if($conn->query($sql)===TRUE){
		echo "<h1>Please Wait for Admin Approval</h1>";
	}else{
		echo "Error_RG-1 =" . $conn->error;
	}

?>