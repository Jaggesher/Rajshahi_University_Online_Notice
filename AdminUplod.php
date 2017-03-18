<?php

	$userPassword=$_POST['givenpass'];
	$userID=$_POST['givenid'];
	$UserType=$_POST['btnUpaD'];
	include 'dbconnect.php';
	$sql = "SELECT ID FROM admin_up_table WHERE UserID='".$userID."' AND Pass='".$userPassword."' AND Type='".$UserType."'";
	$result = $conn->query($sql);
	if($result->num_rows > 0)
	{
		$row = $result->fetch_assoc();
		if($UserType=="admin"){
			session_start();
			$_SESSION['ID']=$row["ID"];
			$_SESSION['Type']="admin";
			header('location:admin.php');
		}else{
			session_start();
			$_SESSION['ID']=$row["ID"];
			$_SESSION['Type']="upload";
			header('location:uploader.php');
		}
	}else{
		echo "FAIL";
	}
?>