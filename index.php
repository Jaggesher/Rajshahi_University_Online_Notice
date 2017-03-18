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
  <link rel="stylesheet" type="text/css" href="mycss/index.css"/>
  <script src="myjs/reg.js"></script>
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
      <a class="navbar-brand" href="#myPage">HOME</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
     <ul class="nav navbar-nav navbar-right">
      <li><a href="#" data-toggle="modal" data-target="#userID">USER</a></li>
      <li><a href="#" data-toggle="modal" data-target="#uploaderID">UPLOADER</a></li>
      <li><a href="#" data-toggle="modal" data-target="#adminID">ADMIN</a></li>
    </ul>
  </div>
</div>
</nav>
<!-- This Is Back Ground Crousal for Profile-->
<header id="myCarousel" class="carousel slide">
  <div class="carousel-inner">
    <div class="item active">
      <div class="fill" style="background-image:url('pic/1.jpg');"></div>
    </div>
    <div class="item">
      <div class="fill" style="background-image:url('pic/2.jpg');"></div>
    </div>

    <div class="item">
      <div class="fill" style="background-image:url('pic/3.jpg');"></div>
    </div>
    <div class="item">
      <div class="fill" style="background-image:url('pic/4.jpg');"></div>
    </div>
  </div>
</header>

<div class="cls1"> <!-- This div Containing Whole thing-->
  <div class="cls2">
    <div class="container">
      <div class="col-sm-6">
          </br>
          </br>
          </br>
          </br>
        <div class="RegBlock">
      <h1 style="color: white" align="text-center" > <center></br>Welcome</br> to </br> Online Notice Board</h1></center></h1>
      </br></br>
        </div>
      </div>
      
      <div class="col-sm-2"></div>

      <div class="col-sm-4 cls3">

        <!-- Register Block-->
        <div class="RegBlock">
          <center class="Reg">Registation Form</center>
          <form action="RegTm.php" method="post" name="reg_input" onsubmit="return Chk_Valid()">
            <input  type="text" name="userID" value="" placeholder="User ID" id="userid" onclick="Reform_id()">
          </input>
          <input type="text" name="userName" value="" placeholder="Full Name" id="name" maxlength="50" onclick="Refrom_name()" >
        </input>

        <input  type="password" name="userPassword" value="" placeholder="Password" id="password" maxlength="30" onclick="Reform_pass()">
      </input>

      <input  type="password" name="confirmPassword" value="" placeholder="Confirm Password" id="cpassword" maxlength="30" onclick="Reform_cpass()">
    </input>


    <input type="date" name="birthdate" id="bdate" onclick="Reform_date()">
  </input>

  <select name="UserType" ID="UserType" onclick="Reform_UserType()">
    <option value="" disabled selected hidden>Select User Type.</option>
    <option style="color: black" value="1">Faculty Members</option>
    <option style="color: black" value="2">Officers</option>
    <option style="color: black" value="3">Student</option>
    <option style="color: black" value="4">Staff</option>
  </select>


  <select name="userDept" id="userDept" onclick="Refrom_userDept()">
    <option value="" disabled selected hidden>Select Department</option>
    <option style="color: black" value="Computer Science & Engineering">Computer Science & Engineering</option>
    <option style="color: black" value="Information & Communication Engineering">Information & Communication Engineering</option>
    <option style="color: black" value="Applied Physics & Electronics Engineering">Applied Physics & Electronics Engineering</option>
    <option style="color: black" value="Material Science & Engineering">Material Science & Engineering</option>
    <option style="color: black" value="Electrical & Electronics Engineering">Electrical & Electronics Engineering</option>
  </select>

  <select name="Hall" ID="Hall" onclick="Reform_gender()">
    <option value="" disabled selected hidden>Select Hall</option>
     <option style="color: black" value="NULL">NULL</option>
    <option style="color: black" value="Sher-e Bangla Fazlul Haque Hall">Sher-e Bangla Fazlul Haque Hall</option>
    <option style="color: black" value="Shah Mukhdum Hall">Shah Mukhdum Hall</option>
    <option style="color: black" value="Nawab Abdul Latif Hall">Nawab Abdul Latif Hall</option>
    <option style="color: black" value="Syed Amer Ali Hall">Syed Amer Ali Hall</option>
    <option style="color: black" value="Shaheed Shamsuzzoha Hall">Shaheed Shamsuzzoha Hall</option>

  </select>

  <button style="background-color:#b31919;" type="submit" id="continue">Submit</button>
</form>
</div>
</div>

</div>
</div> 
<footer class="text-center">
  <a class="up-arrow" href="#myPage" data-toggle="tooltip" title="TO TOP">
    <span class="glyphicon glyphicon-chevron-up"></span>
  </a><br><br>
  <p><strong>Project : </strong> Online Notice Board</p>
  <p>Developed by : Shabbir Mahmood , Hasnain Mahmud
   , Md. Nuruzzaman</br>Computer Science & Engineering Department </br>University of Rajshahi</p>
  </footer>
</div><!-- Main Contenet must be inside this div-->
<!-- Script to Activate the Carousel -->
<script>
  $('.carousel').carousel({
        interval: 5000 //changes the speed
      })
    </script>

    <!-- This Model For USER button -->
    <div class="modal fade" id="userID" role="dialog">
      <div class="modal-dialog">
        <div  class="modal-content">
          <div style="background-color:#b31919" class="modal-header">
            <button  type="button" class="close" data-dismiss="modal">x</button>
            <h4 style="background-color:#b31919" ><span class="glyphicon glyphicon-user"></span> User</h4>
          </div>
          <div  class="modal-body">
            <form role="form" name="userform" method="post" action="UserTm.php" onsubmit="return Chk_Valid_User()">
              <div class="form-group">
                <input type="text" class="form-control" id="userID" name="userID" maxlength="10" placeholder="User ID">
              </div>
              <div class="form-group">
                <input type="password" class="form-control" name="userPassword" maxlength="30" id="userPassword" placeholder="Password">
              </div>
              <div class="form-group">
                <select id="UserType" name="UserType" class="form-control">
                  <option style="color: #303036" value="" disabled selected hidden>Select Catagory</option>
                  <option style="color: black" value="1">Faculty Members</option>
                  <option style="color: black" value="2">Officers</option>
                  <option style="color: black" value="3">Student</option>
                  <option style="color: black" value="4">Staff</option>
                </select>
              </div>
              <div class="form-group">
                <button style="background-color:#b31919" type="submit" name="btng" value="12" class="btn btn-block"> 
                  <span class="glyphicon glyphicon-ok-sign"> LogIn</span>
                </button>
              </div>
            </form>
            <div class="form-group">
              <button style="background-color:#b31919" type="button" class="btn btn-block" data-dismiss="modal">
                <span class="glyphicon glyphicon-remove-sign"> Cancel</span>
              </button>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- This Model For Upload button -->
    <div class="modal fade" id="uploaderID" role="dialog">
      <div class="modal-dialog">
        <div class="modal-content">
          <div style="background-color:#b31919" class="modal-header">
            <button type="button" class="close" data-dismiss="modal">x</button>
            <h4 style="background-color:#b31919"><span class="glyphicon glyphicon-user"></span>  Uploader</h4>
          </div>
          <div class="modal-body">
            <form role="form" name="uploadform" method="post" action="AdminUplod.php" onsubmit="return Chk_Valid_Up()">
              <div class="form-group">
                <input type="text" class="form-control" id="givenid" name="givenid" maxlength="10" placeholder="User ID">
              </div>
              <div class="form-group">
                <input type="password" class="form-control" name="givenpass" maxlength="10" id="givenpass" placeholder="Password">
              </div>
              <div class="form-group">
                <button style="background-color:#b31919" type="submit" name="btnUpaD" value="upload" class="btn btn-block">
                  <span class="glyphicon glyphicon-ok"> LogIn</span>
                </button>
              </div>
            </form>
            <div class="form-group">
              <button style="background-color:#b31919" type="button" class="btn btn-block" data-dismiss="modal">
                <span class="glyphicon glyphicon-remove-sign">  Cancel</span>
              </button>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- This Model For admin button -->

    <div class="modal fade" id="adminID" role="dialog">
      <div class="modal-dialog">
        <div class="modal-content">
          <div style="background-color:#b31919" class="modal-header">
            <button type="button" class="close" data-dismiss="modal">x</button>
            <h4 style="background-color:#b31919"><span class="glyphicon glyphicon-user"></span>  Admin</h4>
          </div>
          <div class="modal-body">
            <form role="form" name="adminform" method="post" action="AdminUplod.php" onsubmit="return Chk_Valid_Ad()">
              <div class="form-group">
                <input type="text" class="form-control" id="givenid" name="givenid" maxlength="10" placeholder="User ID">
              </div>
              <div class="form-group">
                <input type="password" class="form-control" name="givenpass" maxlength="10" id="givenpass" placeholder="Password">
              </div>
              <div class="form-group">
                <button style="background-color:#b31919" type="submit" name="btnUpaD" value="admin" class="btn btn-block"> 
                  <span class="glyphicon glyphicon-ok"> LogIn</span>
                </button>
              </div>
            </form>
            <div class="form-group">
              <button style="background-color:#b31919" type="button" class="btn btn-block" data-dismiss="modal">
                <span class="glyphicon glyphicon-remove-sign"> Cancel</span>
              </button>
            </div>
          </div>
        </div>
      </div>
    </div>





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
      })
    </script>
  </body>
  </html>


