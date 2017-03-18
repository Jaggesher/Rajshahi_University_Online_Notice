<?php
	if(TRUE){

		$Type=$_POST["Type"];
		echo '<script src="myjs/adminmem.js"></script>';
		echo '<div id="TempContent" class="text-center">';

		include 'dbconnect.php';

		$sql="SELECT * FROM account WHERE Type=".$Type;
		$result = $conn->query($sql);
		if($result->num_rows>0){
			while($row = $result->fetch_assoc()) {

				$Hall=$row["Hall"];
				if($Hall==""){
					$Hall="No Content";
				}
				$Tm=$row["Type"];
				$TYPE="N/A";
				if($Tm==1){
					$TYPE="Faculty Members";
				}
				else if($Tm==2){
					$TYPE="Officers";

				}else if($Tm==3){
					$TYPE="Student";

				}else if($Tm==4){
					$TYPE="Staff";
				}


				echo '
					<div class="col-lg-12 text-center well" style="border-color: black">
						<button style="background-color:#b31919" type="button" style="border:none;" class="btn btn-default btn-sm pull-right btndel" data-toggle="tooltip" data-placement="bottom" title="Remove" value="'.$row["ID"].'">
		                    <span style="color:white" class="glyphicon glyphicon-remove"></span>
		                </button>
						<h3>User ID: '.$row["UserID"].'.</h3>
						<h4>Name: '.$row["Name"].'.</h4>
						<h4>Dept: '.$row["Dept"].'</h4>
						<h4>Hall: '.$Hall.'</h4>
						<h4>Birth: '.$row["Birth"].'</h4>
						<h4>Type: '.$TYPE.'</h4>
						<h4>Status: '.$row["Status"].'</h4>';

						if($row["Status"]!="approve"){
							echo '
							<button style="background-color:#b31919" type="button" style="border:none;" class="btn btn-default btn-sm btnac" data-toggle="tooltip" data-placement="bottom" title="Accept"  value="'.$row["ID"].'">
				                    <span style="color:white" class="glyphicon glyphicon-ok-sign"></span>
				            </button>';
				        }

				 echo '
					</div>
				';


			}
		}
		else{
			echo '
			</br>
			</br>
			</br>
			</br>
			</br>
			</br>
			<h1 >No Content</h1>
			</br>
			</br>
			</br>
			</br>
			</br>
			</br>
			';
		}
	echo '</div>';

	}else{
		echo "You Are Not Logged In";
	}
?>