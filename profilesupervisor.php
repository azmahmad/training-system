<?php
include('dbconfig.php');
 session_start();

       if (empty($_SESSION['id_supervisor'])) {
        header('Location: http://localhost/btps/homePage.php');
        die();
        }
	    $id_supervisor=$_SESSION['id_supervisor']; 

        $first_name = isset($_POST[ "first_name" ]) ? $_POST[ "first_name" ] : "";
        $last_name = isset($_POST[ "last_name" ]) ? $_POST[ "last_name" ] : "";
        $email = isset($_POST[ "email" ]) ? $_POST[ "email" ] : "";
        $phone = isset($_POST[ "phone" ]) ? $_POST[ "phone" ] : "";
        $department = isset($_POST[ "department" ]) ? $_POST[ "department" ] : "";
        $password = isset($_POST[ "password" ]) ? $_POST[ "password" ] : "";
        $repassword = isset($_POST[ "repassword" ]) ? $_POST[ "repassword" ] : "";

 if(isset($_POST["submit"])) {


    
$sqll = "UPDATE supervisor SET  first_name = '$first_name' , last_name='$last_name', email = '$email' , phone = '$phone', department = '$department', password = '$password', repassword = '$repassword' WHERE id_supervisor='$id_supervisor'";
    $result = mysqli_query( $conn, $sqll);
 }

?>

 <!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<title>TraingSeek</title>
		<link rel="shortcut icon" href="images/favicon.png">

		<!-- Main Stylesheet -->
		<link href="css/style.css" rel="stylesheet">

		 <meta name="description" content="">
    <meta name="author" content="">
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha256-3dkvEK0WLHRJ7/Csr0BZjAWxERc5WH7bdeUya2aXxdU= sha512-+L4yy6FRcDGbXJ9mPG8MT/3UCDzwR9gPeyFNMCtInsol++5m3bk2bXWKdZjvybmohrAsn3Ua5x8gfLnbE1YkOg==" crossorigin="anonymous">
    <!-- Bootstrap Core CSS -->
<!--     <link href="css/bootstrap.min.css" rel="stylesheet"> -->
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" integrity="sha256-7s5uDGW3AHqw6xtJmNNtr+OBRJUlgkNJEo78P4b0yRw= sha512-nNo+yCHEyn0smMxSswnf/OnX6/KwJuZTlNZBjauKhTK0c+zT+q5JOCx0UFhXQ6rJR9jg6Es8gPuD2uZcYDLqSw==" crossorigin="anonymous">

    <!-- Custom CSS -->
    <style>
    body {
        padding-top: 70px;
        /* Required padding for .navbar-fixed-top. Remove if using .navbar-static-top. Change if height of navigation changes. */
    }

    .othertop{margin-top:10px;}
    </style>
	</head>

	<body>

			<!-- ============ PAGE LOADER START ============ -->

		<div id="loader">
			<i class="fa fa-cog fa-4x fa-spin"></i>
		</div>

		<!-- ============ PAGE LOADER END ============ -->

		<!-- ============ NAVBAR START ============ -->

		<div class="fm-container">
			<!-- Menu -->
			<div class="menu">
				<div class="button-close text-right">
					<a class="fm-button"><i class="fa fa-close fa-2x"></i></a>
				</div>
				<ul class="nav">
<li><a href="profilesupervisor.php">Homepage</a></li>
<li class="active" ><a href="profilesupervisor.php">Profile</a></li>
			<li><a href="trainees.php">trainees</a></li>
	<li><a href="recivesuper.php">Evaluate Reports</a></li>
            <li><a href="logout.php">Logout</a></li>
				</ul>		
			</div>
			<!-- end Menu -->
		</div>

		<!-- ============ NAVBAR END ============ -->

		<!-- ============ HEADER START ============ -->

		<header>
			<div id="header-background"></div>
			<div class="container">
				<div class="pull-left">
					<div id="menu-open" >
		<a class="fm-button"><i class="fa fa-bars fa-lg"></i></a>
				</div>
				</div>
				<div class="pull-right">
				<a href="redirectLogout.php">
			<img src="images/248930.png" width="50" height="50" id="logout"></a>
			</div>
		<div id="logo" class="pull-right"><a href="homePage.php">
<img width="155" src="images/Training-Industry.png"/></a>
			</div>
			
			</div>
		</header>
		<br>
<br>

		<!-- ============ HEADER END ============ -->

   <div class="container">
<div class="row">
<div class="col-md-10 ">
<form class="form-horizontal" method="post" action="profilesupervisor.php">
<fieldset>

<!-- Form Name -->
<br>
<br>
 <legend>updata your profile</legend>

<!-- ID-->



<!-- Text input-->
<div class="form-group">
<label class="col-md-4 control-label" for="Name">
first Name </label>  

  <div class="col-md-4"> 
       <div class="input-group">
       <div class="input-group-addon"> 
     
       </div>
       <input id="Name" name="first_name" type="text" placeholder="first name" class="form-control input-md">
      </div>
  </div>
</div>


<!-- Text input-->
<div class="form-group">
<label class="col-md-4 control-label" for="Email Address">last name</label>  
  <div class="col-md-4">
  <div class="input-group">
       <div class="input-group-addon"></div>
    <input id="last_name" name="last_name" type="text" placeholder="last_name" class="form-control input-md">
      </div>
  </div>
</div>

<!-- Text input-->
<div class="form-group">
<label class="col-md-4 control-label" for="phone">email</label>  
  <div class="col-md-4">
  <div class="input-group">
       <div class="input-group-addon"></div>
    <input name="email" type="email" placeholder="email" 
    class="form-control input-md">
      </div>
  </div>
</div>

<!-- Text input--> 
<div class="form-group">
<label class="col-md-4 control-label" for="phone">phone</label>  
  <div class="col-md-4">
  <div class="input-group">
       <div class="input-group-addon"></div>
    <input name="phone" type="phone" placeholder="phone" 
    class="form-control input-md">
      </div>
  </div>
</div>
<!-- Text input--> 
<div class="form-group">
<label class="col-md-4 control-label" for="phone">department</label>  
  <div class="col-md-4">
  <div class="input-group">
       <div class="input-group-addon"></div>
    <input name="department" type="department" placeholder="department" 
    class="form-control input-md">
      </div>
  </div>
</div>
<!-- Text input--> 

<!-- Text input--> 

<!-- Text input--> 

<!-- Text input--> 
<div class="form-group">
<label class="col-md-4 control-label" for="phone">password</label>  
  <div class="col-md-4">
  <div class="input-group">
       <div class="input-group-addon"></div>
    <input name="password" type="password" placeholder="password" 
    class="form-control input-md">
      </div>
  </div>
</div>
<!-- Text input--> 
<div class="form-group">
<label class="col-md-4 control-label" for="phone">repassword</label>  
  <div class="col-md-4">
  <div class="input-group">
       <div class="input-group-addon"></div>
    <input name="repassword" type="password" placeholder="repassword" 
    class="form-control input-md">
      </div>
  </div>
</div>


<!-- Descrabtion input-->
<center>
<button name="submit" class="btn btn-primary submit-button">submit</button>
</center>
</fieldset>
</form>
</div>
<div class="col-md-2 hidden-xs">
<img src="http://websamplenow.com/30/userprofile/images/avatar.jpg" class="img-responsive img-thumbnail ">
  </div>
</div>
   </div>
		
		<!-- ============ CONTACT START ============ -->

		<section id="contact" class="color2">
			<div class="container">
			</div>
		</section>

		<!-- ============ CONTACT END ============ -->

		<!-- ============ FOOTER START ============ -->

		<footer>
			<div id="credits">
				<div class="container text-center">
					<div class="row">
						<div class="col-sm-12">
							&copy; 2018 trainseek<br>
Designed &amp; Developed by	<br><b>Ahmed Alazm <br>Taysear Swadain 
	<br> Rakan Alkhatib</b>
						</div>
					</div>
				</div>
			</div>
		</footer>

		<!-- ============ FOOTER END ============ -->

		<!-- Modernizr Plugin -->
		<script src="js/modernizr.custom.79639.js"></script>

		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
		<script src="js/jquery-1.11.2.min.js"></script>

		<!-- Bootstrap Plugins -->
		<script src="js/bootstrap.min.js"></script>

		<!-- Retina Plugin -->
		<script src="js/retina.min.js"></script>

		<!-- ScrollReveal Plugin -->
		<script src="js/scrollReveal.min.js"></script>

		<!-- Flex Menu Plugin -->
		<script src="js/jquery.flexmenu.js"></script>

		<!-- Slider Plugin -->
		<script src="js/jquery.ba-cond.min.js"></script>
		<script src="js/jquery.slitslider.js"></script>

		<!-- Carousel Plugin -->
		<script src="js/owl.carousel.min.js"></script>

		<!-- Parallax Plugin -->
		<script src="js/parallax.js"></script>

		<!-- Counterup Plugin -->
		<script src="js/jquery.counterup.min.js"></script>
		<script src="js/waypoints.min.js"></script>

		<!-- No UI Slider Plugin -->
		<script src="js/jquery.nouislider.all.min.js"></script>

		<!-- Bootstrap Wysiwyg Plugin -->
		<script src="js/bootstrap3-wysihtml5.all.min.js"></script>

		<!-- Flickr Plugin -->
		<script src="js/jflickrfeed.min.js"></script>

		<!-- Fancybox Plugin -->
		<script src="js/fancybox.pack.js"></script>

		<!-- Magic Form Processing -->
		<script src="js/magic.js"></script>

		<!-- jQuery Settings -->
		<script src="js/settings.js"></script>


		<!-- jQuery Version 1.11.1 -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>


	</body>
</html>