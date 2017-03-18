<?php
	
	if(TRUE){
		$Tm=$_POST["Tm"];
		include 'dbconnect.php';
		$sql="DELETE FROM account WHERE ID=".$Tm;
		if($conn->query($sql)===TRUE){
			echo "OK";
		}else{
			echo "Error_RG =" . $conn->error;
		}
	}else{
		echo "You Are Not Logged IN.";
	}
?>