<?php
	session_start();
	if(!isset($_SESSION['ID']) || empty($_SESSION['ID'])){
		header('location:index.php');
	}
	else if($_SESSION['Type']!="user"){
		header('location:index.php');
	}
?>