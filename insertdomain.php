<?php
include('dbconfig.php');
$name = isset($_POST[ "name" ]) ? $_POST[ "name" ] : "";
$description = isset($_POST[ "description" ]) ? $_POST[ "description" ] : "";

  if(isset($_POST['submit']))
{
    $sql = "INSERT INTO domain (name,description)
    VALUES ('".$_POST["name"]."','".$_POST["description"]."')";

    $result = mysqli_query($conn,$sql);
}

?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>TraingSeek</title>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
	<link rel="shortcut icon" href="images/favicon.png">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

		<!-- Main Stylesheet -->
		<link href="css/style.css" rel="stylesheet">
	</head>
	<body id="home">
		<!-- ============ NAVBAR START ============ -->
		<div class="fm-container">
			<!-- Menu -->
			<div class="menu">
				<div class="button-close text-right">
		<a class="fm-button"><i class="fa fa-close fa-2x"></i></a>
				</div>
				<ul class="nav">
	<li  ><a href="homePage admin.php">Homepage</a></li>
			<li><a href="admin.php">Validate Student</a></li>
			<li><a href="admin_res.php">Validate Responsible</a></li>
			<li class="active"><a href="insertdomain.php">Insert Domain</a></li>
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
				<a href="logout.php">
	<img src="images/248930.png" width="50" height="50" id="logout"></a>
			</div>
		<div id="logo" class="pull-right">

			</div>
			
			</div>
		</header>

		<!-- ============ HEADER END ============ -->

		<!-- ============ RESUME START ============ -->
		
		<section id="resume">
			<div class="container">
				<div class="row text-center">
					<div class="col-sm-12">
						<h1>Enter domain</h1>
						<h4>insert a new domain</h4>
					</div>
				</div>

				<form method="post" action="insertdomain.php" enctype="form-data/multipart">

					<!-- Resume Details Start -->
					<div class="row">
						<div class="col-sm-6">
							<h2>new domain</h2>
						</div>
						<div class="col-sm-6 text-right">
						</div>
					</div>
						<div class="row">
						<div class="col-sm-6">
							<div class="form-group" id="resume-name-group">
					<label for="resume-name">name</label>
<input name="name" type="text" class="form-control" id="resume-name" placeholder="">
							</div>
						</div>
                 <div class="row">
						<div class="col-sm-6">
							<div class="form-group" id="resume-name-group">
					<label for="resume-name">description</label>
            <input name="description" type="text" class="form-control" id="resume-name" placeholder="">
							</div>
						</div>

					<!-- Resume Details End -->
					
					<!-- Resume File Start -->

					<div class="row text-center">
						<div class="col-sm-12">
							<p>&nbsp;</p>
							
				 <input type="submit" name="submit" class="btn btn-info btn-sm">

							</i></a>
						</div>
					</div>

				</form>

			</div>
		</section>

		<!-- ============ RESUME END ============ -->
<!-- ============ CONTACT START ============ -->

		<section id="contact" class="color2">
			
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

		<!-- for slides pic in HP-->

		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
		<script src="js/jquery-1.11.2.min.js"></script>

		<!-- for slides pic in HP-->

		<!-- Bootstrap Plugins -->
		
		<!-- Retina Plugin -->
		

		<!-- ScrollReveal Plugin -->
		

		<!-- Flex Menu Plugin -->
		<script src="js/jquery.flexmenu.js"></script>

		<!-- Slider Plugin -->
		<script src="js/jquery.ba-cond.min.js"></script>
		<script src="js/jquery.slitslider.js"></script>

		<!-- Carousel Plugin -->
		<script src="js/owl.carousel.min.js"></script>
		<!-- for latest news-->

		<!-- Parallax Plugin -->
		

		<!-- Counterup Plugin -->
		<script src="js/jquery.counterup.min.js"></script>
		<script src="js/waypoints.min.js"></script>

		<!-- No UI Slider Plugin -->
		<script src="js/jquery.nouislider.all.min.js"></script>
		<!-- TRAINING STATS to show u its increaming-->

		<!-- Flickr Plugin -->
		<script src="js/jflickrfeed.min.js"></script>

		<!-- Fancybox Plugin -->
		<script src="js/fancybox.pack.js"></script>

		<!-- Magic Form Processing -->
		<script src="js/magic.js"></script>

		<!-- jQuery Settings -->
		<script src="js/settings.js"></script>
	</body>
</html>