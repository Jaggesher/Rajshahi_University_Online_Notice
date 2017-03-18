<?php
	
	if(TRUE){

		$CatID=$_POST["CatID"];
		$FacID=$_POST["FacID"];
		$DeptID=$_POST["DeptID"];
		$HalID=$_POST["HalID"];
		$UsrID=$_POST["UsrID"];
		include 'dbconnect.php';
		$curDate=date("Y-m-d");

		function check_in_range($start_date, $end_date, $date_from_user)
			{
			  // Convert to timestamp
			  $start_ts = strtotime($start_date);
			  $end_ts = strtotime($end_date);
			  $user_ts = strtotime($date_from_user);

			  // Check that user date is between start & end
			  return (($user_ts >= $start_ts) && ($user_ts <= $end_ts));
			}

		if($CatID=="General"){
			$sql='SELECT general_ntc.Message AS msg, general_ntc.StartDat AS st,general_ntc.EndDat AS et,admin_up_table.Name AS name FROM general_ntc INNER JOIN admin_up_table  ON general_ntc.UploaderID=admin_up_table.ID AND general_ntc.Type='.$UsrID;

			$result = $conn->query($sql);
			if($result->num_rows>0){
				while($row = $result->fetch_assoc()) {

				if( check_in_range($row["st"] ,$row["et"] , $curDate)){

					echo'
							<div class="container-fluid text-center cls_ntc slideanim">
			            </br>
					<p>'.$row["msg"].'</p>
					</br>
					<div class="col-sm-8 text-left" style="color:#FB667A;">
						<h4>Appearance Date: '.$row["st"].'</h4>
						<h4>Expired Date:  '.$row["et"].'</h4>
					</div>
					<div class="col-sm-4" style="color:#FB667A;">
						<p align="right">Posted By</p>
						<p align="right" style="font-size:15px;">'.$row["name"].'</p>
						</div>
				</div>';
			}


				}
			}else{

				echo '
				<div class="container-fluid text-center cls_ntc slideanim">
				<br>
				<br>
				<br>
				<br>
				<h1>No Content</h1>
				<br>
				<br>
				<br>
				<br>
				</div>
				';

			}

		}else if($CatID=="Administrative"){
			$sql='SELECT admin_ntc.Message AS msg, admin_ntc.StartDat AS st,admin_ntc.EndDat AS et,admin_up_table.Name AS name FROM admin_ntc INNER JOIN admin_up_table  ON admin_ntc.UploaderID=admin_up_table.ID AND admin_ntc.Type='.$UsrID;

			$result = $conn->query($sql);
			if($result->num_rows>0){
				while($row = $result->fetch_assoc()) {
					if( check_in_range($row["st"] ,$row["et"] , $curDate)){

					echo'
							<div class="container-fluid text-center cls_ntc slideanim">
			            </br>
					<p>'.$row["msg"].'</p>
					</br>
					<div class="col-sm-8 text-left" style="color:#FB667A;">
						<h4>Appearance Date: '.$row["st"].'</h4>
						<h4>Expired Date:  '.$row["et"].'</h4>
					</div>
					<div class="col-sm-4" style="color:#FB667A;">
						<p align="right">Posted By</p>
						<p align="right" style="font-size:15px;">'.$row["name"].'</p>
						</div>
				</div>';

			}
				}
			}else{

				echo '
				<div class="container-fluid text-center cls_ntc slideanim">
				<br>
				<br>
				<br>
				<br>
				<h1>No Content</h1>
				<br>
				<br>
				<br>
				<br>
				</div>
				';

			}


		}else if($CatID=="Hall Related"){

			$sql='SELECT hall_ntc.Message AS msg, hall_ntc.StartDat AS st,hall_ntc.EndDat AS et,admin_up_table.Name AS name FROM hall_ntc INNER JOIN admin_up_table  ON hall_ntc.UploaderID=admin_up_table.ID AND hall_ntc.Type='.$UsrID.' AND hall_ntc.Hall="'.$HalID.'"';

			$result = $conn->query($sql);
			if($result->num_rows>0){
				while($row = $result->fetch_assoc()) {
					if( check_in_range($row["st"] ,$row["et"] , $curDate)){

					echo'
							<div class="container-fluid text-center cls_ntc slideanim">
			            </br>
					<p>'.$row["msg"].'</p>
					</br>
					<div class="col-sm-8 text-left" style="color:#FB667A;">
						<h4>Appearance Date: '.$row["st"].'</h4>
						<h4>Expired Date:  '.$row["et"].'</h4>
					</div>
					<div class="col-sm-4" style="color:#FB667A;">
						<p align="right">Posted By</p>
						<p align="right" style="font-size:15px;">'.$row["name"].'</p>
						</div>
				</div>';
			}

				}
			}else{

				echo '
				<div class="container-fluid text-center cls_ntc slideanim">
				<br>
				<br>
				<br>
				<br>
				<h1>No Content</h1>
				<br>
				<br>
				<br>
				<br>
				</div>
				';

			}


		}else if($CatID=="Faculty"){

			$sql='SELECT faculty_ntc.Message AS msg, faculty_ntc.StartDat AS st,faculty_ntc.EndDat AS et,admin_up_table.Name AS name FROM faculty_ntc INNER JOIN admin_up_table  ON faculty_ntc.UploaderID=admin_up_table.ID AND faculty_ntc.Type='.$UsrID.' AND faculty_ntc.Faculty="'.$FacID.'" AND faculty_ntc.Dept="'.$DeptID.'"';

			$result = $conn->query($sql);
			if($result->num_rows>0){
				while($row = $result->fetch_assoc()) {
					if( check_in_range($row["st"] ,$row["et"] , $curDate)){
					echo'
							<div class="container-fluid text-center cls_ntc slideanim">
			            </br>
					<p>'.$row["msg"].'</p>
					</br>
					<div class="col-sm-8 text-left" style="color:#FB667A;">
						<h4>Appearance Date: '.$row["st"].'</h4>
						<h4>Expired Date:  '.$row["et"].'</h4>
					</div>
					<div class="col-sm-4" style="color:#FB667A;">
						<p align="right">Posted By</p>
						<p align="right" style="font-size:15px;">'.$row["name"].'</p>
						</div>
				</div>';
			}

				}
			}else{

				echo '
				<div class="container-fluid text-center cls_ntc slideanim">
				<br>
				<br>
				<br>
				<br>
				<h1>No Content</h1>
				<br>
				<br>
				<br>
				<br>
				</div>
				';
		}
	}

	}else{
		echo "You Are Not Logged In.";
	}

	$conn->close();
?>