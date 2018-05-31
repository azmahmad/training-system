<?php

include('dbconfig.php');
$jobtitle = isset($_POST[ "jobtitle" ]) ? $_POST[ "jobtitle" ] : "";
$location = isset($_POST[ "location" ]) ? $_POST[ "location" ] : "";
$state = isset($_POST[ "state" ]) ? $_POST[ "state" ] : "";
$id_respon = isset($_POST[ "id_respon" ]) ? $_POST[ "id_respon" ] : "";
$salary = isset($_POST[ "salary" ]) ? $_POST[ "salary" ] : "";
$jobtype = isset($_POST[ "jobtype" ]) ? $_POST[ "jobtype" ] : "";
$date_offer = isset($_POST[ "date_offer" ]) ? $_POST[ "date_offer" ] : "";
$requirement = isset($_POST[ "requirement" ]) ? $_POST[ "requirement" ] : "";
$description = isset($_POST[ "description" ]) ? $_POST[ "description" ] : "";
$department = isset($_POST[ "department" ]) ? $_POST[ "department" ] : "";
$name = isset($_POST[ "name" ]) ? $_POST[ "name" ] : "";
$domainselected = isset($_POST[ "domainselected" ]) ? $_POST[ "domainselected" ] : "";


if(isset($_POST['submit']))
{
$sql = "INSERT INTO offers (jobtitle, location, state, id_respon, salary, jobtype, date_offer, requirement, descriotion,department,name)
VALUES ('".$_POST["jobtitle"]."','".$_POST["location"]."','".$_POST["state"]."','".$_POST["id_respon"]."','".$_POST["salary"]."','".$_POST["jobtype"]."','".$_POST["date_offer"]."','".$_POST["requirement"]."','".$_POST["description"]."','".$_POST["department"]."','".$_POST["name"]."')";
$result = mysqli_query($conn,$sql);

}
?>

<?php

if(isset($_POST['submit']))
{
$domainselected = isset($_POST[ "domainselected" ]) ? $_POST[ "domainselected" ] : "";
$sql2 = "SELECT id_offer FROM offers WHERE jobtitle='$jobtitle'" ;
           $result2 = mysqli_query($conn,$sql2);
            $row = $result2->fetch_assoc();
            $id_offer = $row['id_offer'];
             
$sql3 = "INSERT INTO has (id_off,id_dom)
VALUES ('$id_offer','".$_POST["domainselected"]."' )";
$result3 = mysqli_query($conn,$sql3);

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
<li ><a href="homePage respon.php">Homepage</a></li>
<li><a href="profileRespon.php">Profile</a></li>
<li class="active"><a href="post a offer.php">Post an offer</a></li>
<li ><a href="candidates.php">Candidates</a></li>
<li><a href="‏‏company profile respon.php">‏‏company profile</a></li>
<li><a href="logout.php">Logout</a></li>
</ul>
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
</div>
<div id="logo" class="pull-right">
<img width="155" src="images/Training-Industry.png"/>
</div>

</div>
</header>

<!-- ============ HEADER END ============ -->

<!-- ============ RESUME START ============ -->

<section id="resume">
<div class="container">
<div class="row text-center">
<div class="col-sm-12">
<h1>Post an offers</h1>
<h4>Post your creative offer</h4>
</div>
</div>

<form method="post" action="post a offer.php" enctype="form-data/multipart">

<!-- Resume Details Start -->
<div class="row">
<div class="col-sm-6">
<h2>offers details</h2>
</div>
<div class="col-sm-5 text-right">
</div>
</div>
<br>
<div class="row">
<div class="col-sm-5">
	
<div class="form-group" id="resume-name-group">
<label for="resume-name">job title</label>
<input name="jobtitle" type="text" class="form-control" id="resume-name" placeholder="">

</div>
</div>
</div>
<div class="row">
<div class="col-sm-5">
<div class="form-group" id="resume-name-group">
<label for="resume-name">location</label>
<input name="location" type="text" class="form-control" id="resume-name" placeholder="">
</div>
</div>
</div>
<div class="row">
<div class="col-sm-5">
<div class="form-group" id="resume-name-group">
<label for="resume-name">state</label>
<input name="state" type="text" class="form-control" id="resume-name" placeholder="">
</div>
</div>
</div>

<div class="row">
<div class="col-sm-5">
<div class="form-group" id="resume-name-group">
<label for="resume-name">id_respon</label>
<input name="id_respon" type="text" class="form-control" id="resume-name" placeholder="">
</div>
</div>
</div>
<div class="row">
<div class="col-sm-5">
<div class="form-group" id="resume-name-group">
	<label for="resume-name">salary</label>
	<input name="salary" type="text" class="form-control" id="resume-name" placeholder="">
</div>
</div>
</div>
<div class="row">
<div class="col-sm-5">
	<div class="form-group" id="resume-name-group">
		<label for="resume-name">jobtype</label>
		<input name="jobtype" type="text" class="form-control" id="resume-name" placeholder="">
	</div>
</div>
</div>
<div class="row">
	<div class="col-sm-5">
		<div class="form-group" id="resume-name-group">
			<label for="resume-name">date</label>
			<input name="date_offer" type="text" class="form-control" id="resume-name" placeholder="">
		</div>
	</div>
	</div>

	<div class="row">
		<div class="col-sm-5">
			<div class="form-group" id="resume-name-group">
				<label for="resume-name">requirement</label>
				<input name="requirement" type="text" class="form-control" id="resume-name" placeholder="">
			</div>
		</div>
</div>
		<div class="row">
			<div class="col-sm-5">
				<div class="form-group" id="resume-name-group">
					<label for="resume-name">description</label>
					<input name="description" type="text" class="form-control" id="resume-name" placeholder="">
				</div>
			</div>
</div>
		<div class="row">
			<div class="col-sm-5">
				<div class="form-group" id="resume-name-group">
					<label for="resume-name">department</label>
					<input name="department" type="text" class="form-control" id="resume-name" placeholder="">
				</div>
			</div>
</div>

		<div class="row">
			<div class="col-sm-5">
				<div class="form-group" id="resume-name-group">
					<label for="resume-name">name</label>
					<input name="name" type="text" class="form-control" id="resume-name" placeholder="">
				</div>
			</div>
</div>


	<div class="row">
	<div class="col-sm-5">
		<div class="form-group" id="resume-name-group">
			<label for="resume-location">domain</label>
			<select name="domainselected" class="form-control">
				<option name= "database" value="1">database</option>
				<option name= "network" value="2">network</option>
				<option name= "ai" value="3">AI</option>
			</select>
		</div>
	</div>
</div>

			<input type="submit" name="submit" class="btn btn-primary submit-button">

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