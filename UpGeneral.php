<?php

	session_start();
    if(isset($_SESSION['ID']) && !empty($_SESSION['ID'])){

		$userID=$_SESSION['ID'];
		$WrtNtcID=$_POST["WrtNtcID"];
		$ApDatID=$_POST["ApDatID"];
		$ExpDatID=$_POST["ExpDatID"];
		$UsrUpID=$_POST["UsrUpID"];

		include 'dbconnect.php';

		$sql = "SELECT COUNT(*)as total FROM general_ntc";
		$result = $conn->query($sql);
		if($result->num_rows > 0)
		{
			$row_array=$result->fetch_array();
			$LatID=$row_array['total']+1;

			$sql="INSERT INTO general_ntc VALUES('$LatID','$WrtNtcID','$ApDatID','$ExpDatID','$UsrUpID','$userID')";
			if($conn->query($sql)===TRUE){
				echo "DONE";
			}
			else{
				echo "Error_UpG-2" . $conn->error;
			}
		}
		else{
			echo "Error_UpG-1" . $conn->error;
		}
	}else{
		echo "You Are Not Logged In.";
	}

	$conn->close();
?>