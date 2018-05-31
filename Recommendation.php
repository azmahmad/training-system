
<?php  
include('dbconfig.php');
session_start();

       if (empty($_SESSION['id_student'])) {
        header('Location: http://localhost/btps/homePageS.php');
        die();
        }
        
	  $id_student=$_SESSION['id_student']; 

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
	</head>
	<body id="home">

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
	<li  ><a href="homePageS.php">Homepage</a></li>
			<li><a href="reg_student.php">Profile</a></li>
			<li class="active"><a href="Recommendation.php">Recommended</a></li>
			<li><a href="showOffers.php">Offers</a></li>
			<li><a href="sturequst.php">watchlist Offers</a></li>
		<li><a href="company profile1.php">company profile</a></li>
			<li><a href="testfatcstu.php">submit report</a></li>
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
			</div>
			
			</div>
		</header>
		<!-- ============ HEADER END ============ -->

		<!-- ============ TITLE START ============ -->

		<section id="title">
			<div class="container">
				<div class="row">
					<div class="col-sm-12 text-center">
						<h1>recommended for you</h1>
						<h4>one step from Training</h4>
					</div>
				</div>
			</div>
		</section>

		<!-- ============ TITLE END ============ -->

		<!-- ============ JOBS START ============ -->

		<section id="jobs">
			<div class="container">
				<div class="row">
					<div class="col-sm-12">

						<div class="jobs">
							

<?php  

    $query2="SELECT * from choose WHERE id_stu = '$id_student' ";
      $result=mysqli_query($conn,$query2);

      while ($row=mysqli_fetch_array($result)) {
	         $id_dom=$row['id_dom'];

      $query20="SELECT * from has WHERE id_dom ='$id_dom' ";
      $result1=mysqli_query($conn,$query20);

      while ($row=mysqli_fetch_array($result1)) {
		$id_dom=$row['id_dom'];
		$id_off=$row['id_off'];
		$_SESSION['id_off']=$row['id_off'];


 $id_off= $_SESSION['id_off']; 


// FETCHING DATA 
$query00="SELECT * from offers WHERE id_offer = '$id_off' ";

$result00=mysqli_query($conn,$query00);
while ($row=mysqli_fetch_array($result00)) {
	
	$id_offer=$row[0];
	$jobtitle=$row[1];
	$state=$row[3];
	$date=$row[7];
	$location=$row[2];	
	$salary=$row[5];
	$jobtype=$row[6];
	$department=$row[10];
	$name=$row[11];

  

		echo "<a href='offerselected.php?id_offer={$id_offer}'  class='featured applied'>";
			echo '<div class="row">';
	echo '<div class="col-lg-1 col-md-1 hidden-sm hidden-xs">';
	echo '		<img src="images/download (7).jpg" alt="logo" class="img-responsive" />';
				echo '</div>';
		echo '<div class="col-lg-4 col-md-5 col-sm-6 col-xs-12 job-title">';
		echo "<p><strong>{$jobtitle}</p>";
					echo "<p><strong>{$name}</strong>";
					echo "<BR>{$department}</p>";
					echo '</div>';
	echo '<div class="col-lg-3 col-md-4 col-sm-4 col-xs-12 job-location">';
	echo "<p><strong>{$location} </p>";
						echo '</div>';
echo '<div class="col-lg-2 col-md-2 col-sm-2 hidden-xs job-type 
text-center">';
echo "<p class='job-salary'>{$salary}<strong></i></strong></p>";
echo "<p class='badge full-time'>{$jobtype}</i></p>";
							echo '</div>';
		echo '<div class="col-lg-2 job-dates visible-lg-block">';
echo "<p class='job-posted'>{$date}<strong></i></strong></p>";
		echo"<p class='job-closes'>{$state}</i></p>";
					echo '</div>';
		    echo '	</div>';
			echo '</a>';
            echo "<br>";
			echo "<br>";
			
			}
   }
}
			?>

						</div>

			

					</div>
				</div>
			</div>
		</section>

		<!-- ============ JOBS END ============ -->

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


	</body>
</html>