<?php

	$userPassword=$_POST['userPassword'];
	$userID=$_POST['userID'];
	$UserType=$_POST['UserType'];
	
	include 'dbconnect.php';
	$sql = "SELECT Status FROM account WHERE UserID='".$userID."' AND Pass='".$userPassword."' AND Type='".$UserType."'";
	$result = $conn->query($sql);
	if($result->num_rows > 0)
	{
		$row = $result->fetch_assoc();
		if($row["Status"]=="approve"){
			session_start();
			$_SESSION['ID']='2';
			$_SESSION['Type']="user";
			header('location:user.php');
		}
		else{
			echo "<h1>Please Wait For Approval</h1>";
		}
	}else{
		echo "FAIL";
	}
?>