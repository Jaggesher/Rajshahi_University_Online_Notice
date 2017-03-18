<?php
	session_start();
	if(!isset($_SESSION['ID']) || empty($_SESSION['ID'])){
		header('location:index.php');
	}
	else if($_SESSION['Type']!="admin"){
		header('location:index.php');
	}
?>



<!DOCTYPE html>
<html>
<head>
	<title>Online Notice Board</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link href="http://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
	<link href="http://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="mycss/admin.css"/>
	<script src="myjs/admin.js"></script>
</head>

<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="50">
	<nav class="navbar navbar-default navbar-fixed-top">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="#myPage" style="font-size:25px;">Notice Board|Admin</a>
			</div>
			<div class="collapse navbar-collapse" id="myNavbar">
				<ul class="nav navbar-nav navbar-right">
					<li><a href="#" data-toggle="modal" data-target="#Upload">UPLOAD</a></li>
					<li><a href="#" data-toggle="modal" data-target="#Members">MEMBERS</a></li>
					<li id="ShoHide"><a href="#"><span class="glyphicon glyphicon-menu-down"></span></a></li>
					<li><a href="loout.php" data-toggle="tooltip" data-placement="bottom" title="Log Out"><span class="glyphicon glyphicon-off">  </span></a></li>
				</ul>
			</div>
		</div>
	</nav>
	<div class="cls2">
		<div class="container">

			<div class="row clsSelect" id="SlctID">
			</br>

			<div class="col-sm-12">
				<div class="form-group">
					<label for="CatID">Category:</label>
					<select class="form-control" id="CatID">
						<option value="" disabled selected hidden>Select Notice Catagory</option>
						<option value="General">General</option>
						<option value="Administrative">Administrative</option>
						<option value="Hall Related">Hall </option>
						<option value="Faculty">Faculty</option>
					</select>
				</div>
			</div>

			<div class="col-sm-3">
				<div class="form-group">
					<label for="FacID">Faculty:</label>
					<select class="form-control" id="FacID" disabled>
						<option value="" disabled selected hidden>Select Faculty</option>
						<option value="Engineering">Engineering</option>
						<option value="Science">Science</option>
						<option value="Business Studies">Business Studies</option>
						<option value="Arts">Arts</option>
					</select>
				</div>
			</div>
			<div class="col-sm-3">
				<div class="form-group">
					<label for="DeptID">Department:</label>
					<select class="form-control" id="DeptID" disabled>
						<option value="" disabled selected hidden>Select Department</option>
						<option style="color: black" value="Information & Communication Engineering">Information & Communication Engineering</option>
					    <option style="color: black" value="Applied Physics & Electronics Engineering">Applied Physics & Electronics Engineering</option>
					    <option style="color: black" value="Material Science & Engineering">Material Science & Engineering</option>
					    <option style="color: black" value="Electrical & Electronics Engineering">Electrical & Electronics Engineering</option>
					</select>
				</div>
			</div>

			<div class="col-sm-3">
				<div class="form-group">
					<label for="HalID">Hall:</label>
					<select class="form-control" id="HalID" disabled>
						<option value="" disabled selected hidden>Select Hall</option>
						<option style="color: black" value="Sher-e Bangla Fazlul Haque Hall">Sher-e Bangla Fazlul Haque Hall</option>
					    <option style="color: black" value="Shah Mukhdum Hall">Shah Mukhdum Hall</option>
					    <option style="color: black" value="Nawab Abdul Latif Hall">Nawab Abdul Latif Hall</option>
					    <option style="color: black" value="Syed Amer Ali Hall">Syed Amer Ali Hall</option>
					    <option style="color: black" value="Shaheed Shamsuzzoha Hall">Shaheed Shamsuzzoha Hall</option>
					</select>
				</div>
			</div>

			<div class="col-sm-3">
				<div class="form-group">
					<label for="UsrID">User Type:</label>
					<select class="form-control" id="UsrID" disabled>
						<option value="" disabled selected hidden>Select User Type</option>
						<option value="1">Faculty Members</option>
						<option value="2">Officers</option>
						<option value="3">Student</option>
						<option value="4">Staff</option>
					</select>
				</div>
			</div>

			<div class="col-sm-12">
				<div class="form-group pull-right">
					<button style="background-color:#b31919" id="SowNTC" type="button" class="btn btn-Primary" data-dismiss="modal">
						<span style= "color:white" class="glyphicon glyphicon glyphicon-eye-open">Show</span>
					</button>
				</div>
			</div>
		</div>
	</br>

	<div class="row" id="NtcCont">



		<!-- <div class="container-fluid text-center cls_ntc slideanim">
				<button type="button" class="btn btn-default btn-sm pull-right ntc_btn" data-toggle="tooltip" data-placement="bottom" title="Remove" value="1">
	                <span class="glyphicon glyphicon-remove"></span>
	            </button>
	            </br>
			<p>৩য় বারের মতো রক্ত দিলাম। 
				“এসো মোরা হই স্বজন, থাকবে মোদের রক্তের বন্ধন”
				স্বজন ( সেচ্ছায় রক্তদাতাদের একটি সংগঠন)।</p>
			</br>
			<div class="col-sm-8 text-left" style="color:#FB667A;">
				<h4>Appearance Date: 1994-12-16</h4>
				<h4>Expired Date:  1994-12-16</h4>
			</div>
			<div class="col-sm-4" style="color:#FB667A;">
				<p align="right">Posted By</p>
				<p align="right" style="font-size:15px;">Shabiir</p>
				</div>
		</div> -->



	</div>
</div>
</div>

<footer class="text-center">
	<a class="up-arrow" href="#myPage" data-toggle="tooltip" title="TO TOP">
		<span class="glyphicon glyphicon-chevron-up"></span>
	</a><br><br>
	<p><strong>Project: </strong> Online Notice Board.</p>
	<p>Developed by : Shabbir Mahmood , Hasnain Mahmud
   , Md. Nuruzzaman</br>Computer Science & Engineering Department </br>University of Rajshahi</p>
</footer>

<!-- Script to Activate the Carousel -->
<script>
	$('.carousel').carousel({
				interval: 5000 //changes the speed
			})
		</script>

		<div class="modal fade modal-fullscreen" id="Upload"  tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" style="font-size: 50px;font-weight: lighter;" data-dismiss="modal" aria-hidden="true">X</button>
					</div>
					<div class="modal-body container-fluid">
						<div style="background-color:#b31919" class="up_head">
							<p>Upload Notice</p>
						</div>
						<div class="container">

							<div class="col-sm-12">
								<div class="form-group">
									<label for="CatUpID">Category:</label>
									<select class="form-control" id="CatUpID">
										<option value="" disabled selected hidden>Select Notice Catagory</option>
										<option value="General">General</option>
										<option value="Administrative">Administrative</option>
										<option value="Hall Related">Hall </option>
										<option value="Faculty">Faculty</option>
									</select>
								</div>
							</div>

							<div class="col-sm-3">
								<div class="form-group">
									<label for="FacUpID">Faculty:</label>
									<select class="form-control" id="FacUpID" disabled>
										<option value="" disabled selected hidden>Select Faculty</option>
										<option value="Engineering">Engineering</option>
										<option value="Science">Science</option>
										<option value="Business Studies">Business Studies</option>
										<option value="Arts">Arts</option>
									</select>
								</div>
							</div>
							<div class="col-sm-3">
								<div class="form-group">
									<label for="DeptUpID">Department:</label>
									<select class="form-control" id="DeptUpID" disabled>
										<option value="" disabled selected hidden>Select Department</option>
										 <option style="color: black" value="Information & Communication Engineering">Information & Communication Engineering</option>
									    <option style="color: black" value="Applied Physics & Electronics Engineering">Applied Physics & Electronics Engineering</option>
									    <option style="color: black" value="Material Science & Engineering">Material Science & Engineering</option>
									    <option style="color: black" value="Electrical & Electronics Engineering">Electrical & Electronics Engineering</option>
									</select>
								</div>
							</div>

							<div class="col-sm-3">
								<div class="form-group">
									<label for="HalUpID">Hall:</label>
									<select class="form-control" id="HalUpID" disabled>
										<option value="" disabled selected hidden>Select Hall</option>
										<option style="color: black" value="Sher-e Bangla Fazlul Haque Hall">Sher-e Bangla Fazlul Haque Hall</option>
									    <option style="color: black" value="Shah Mukhdum Hall">Shah Mukhdum Hall</option>
									    <option style="color: black" value="Nawab Abdul Latif Hall">Nawab Abdul Latif Hall</option>
									    <option style="color: black" value="Syed Amer Ali Hall">Syed Amer Ali Hall</option>
									    <option style="color: black" value="Shaheed Shamsuzzoha Hall">Shaheed Shamsuzzoha Hall</option>
									</select>
								</div>
							</div>

							<div class="col-sm-3">
								<div class="form-group">
									<label for="UsrUpID">User Type:</label>
									<select class="form-control" id="UsrUpID" disabled>
										<option value="" disabled selected hidden>Select User Type</option>
										<option value="1">Faculty Members</option>
										<option value="2">Officers</option>
										<option value="3">Student</option>
										<option value="4">Staff</option>
									</select>
								</div>
							</div>

							<div class="col-sm-6">
								<div class="form-group">
									<label for="ApDatID">Appearance Date:</label>
									<input type="date" class="form-control" id="ApDatID">
								</div>
							</div>
							<div class="col-sm-6">
								<div class="form-group">
									<label for="ExpDatID">Expire Date:</label>
									<input type="date" class="form-control" id="ExpDatID">
								</div>
							</div>

							<div class="col-sm-12">
								<div class="form-group">
									<label for="WrtNtcID">Write Notice:</label>
									<textarea class="form-control" rows="15" id="WrtNtcID"></textarea>
								</div>
							</div>

							<div class="col-sm-12 form-group">
								<button style="background-color:#b31919" id="UpBtnID" type="button" class="btn btn-primary">Upload <span class="glyphicon glyphicon glyphicon-upload"></span>
								</button>
							</div>

						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="modal fade modal-fullscreen  " id="Members"  tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		    <div class="modal-dialog">
		        <div class="modal-content">
		            <div  class="modal-header">
		                <button type="button" class="close" style="font-size: 50px;font-weight: lighter;" data-dismiss="modal" aria-hidden="true">X</button>
		            </div>
		            <div class="modal-body container-fluid">
		                <div class="col-lg-12">
		                <div style="background-color:#b31919" class="up_head">
							<p>Member List</p>
						</div>
						<div class="container">
							<div class="col-sm-12">
								<div class="form-group">
									<label for="AdminMem">Category:</label>
									<select class="form-control" id="AdminMem">
										<option value="" disabled selected hidden>Select Notice Catagory</option>
										<option value="" disabled selected hidden>Select User Type</option>
										<option value="1">Faculty Members</option>
										<option value="2">Officers</option>
										<option value="3">Student</option>
										<option value="4">Staff</option>
									</select>
								</div>
							</div>
							<div class="container-fluid" ID="MemberContent">

								
							</div>
						</div>

		                </div>
		            </div>
		        </div>
		    </div>
		</div>

		<script>
			
		</script>

		<!-- Animate Page slide -->
		<script>
			$(document).ready(function(){
				$('[data-toggle="tooltip"]').tooltip();
				$(".navbar a, footer a[href='#myPage']").on('click', function(event) {
					if (this.hash !== "") {
						event.preventDefault();
						var hash = this.hash;
						$('html, body').animate({
							scrollTop: $(hash).offset().top
						}, 900, function(){
							window.location.hash = hash;
						});
					}
				});
				$(window).scroll(function() {
					$(".slideanim").each(function(){
						var pos = $(this).offset().top;

						var winTop = $(window).scrollTop();
						if (pos < winTop + 600) {
							$(this).addClass("slide");
						}
					});
				});
			})
		</script>
	</body>
	</html>

