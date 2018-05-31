<?php
		include('dbconfig.php'); 
     session_start();


       if (empty($_SESSION['id_responsible'])) {
        header('Location: http://localhost/final/homePage.php');
        die();
        }    

  $id_responsible=$_SESSION['id_responsible']; 
?>

<?php



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
	<body>
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
			<li><a href="showOffers.php">Offers</a></li>
			<li><a href="sturequst.php">watchlist Offers</a></li>
		<li class="active"><a href="company profile1.php">company profile</a></li>
			<li><a href="submtstu.php">submit report</a></li>
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


		<!-- ============ TITLE START ============ -->

		<section id="title">
			<div class="container">
				<div class="row">
					<div class="col-sm-2">
<img src="images/55.jpg" alt="" class="img-responsive img-circle" />
					</div>
					<div class="col-sm-10">
		<?php 
                 
		
		$sq="SELECT * FROM responsible WHERE id_responsible='$id_responsible'";
		$result100=mysqli_query($conn,$sq);
		while ($row=mysqli_fetch_array($result100)) {
			$id_responsible=$row['id_responsible'];
			$name=$row['name'];	
            $f=$row['file'];
            $d=$row['descriotion'];

	
					
					echo "	<h1>{$name}</h1>";
	echo "<div class='meta'>";
			echo "<span><i>&#10070</i>Computer Science</span>";
	
	echo "<span><i class='job-location'></i>Riyadh</span>";

					echo "	</div>";
					echo "</div>";
				echo "</div>";
			echo "</div>";
		echo "</section>";

		//<!-- ============ TITLE END ============ -->

		//<!-- ============ CONTENT START ============ -->

		echo "<section id='blog'>";
		echo "	<div class='container'>";
				echo "<div class='row'>";

					echo "<div class='col-sm-8'>";

						echo "<article>";
echo "<p><img src= " . "uploads/". basename($row['file']) . " height='300' width='350' class='img-thumnail'/> </p> "; 
		//	              
							echo "<h2>descriotion</h2>";
							echo "<p>{$d}</p>";
							}
						echo "</article>";
		
	


						echo "<hr>";

						//<!-- COMMENTS START -->
						echo "<div class='row'>";
							echo "<div class='col-sm-12'>";
				echo "<h2>Comments</h2>";

				
		$qz="SELECT * FROM rates WHERE id_respon='$id_responsible'";
		$resultz=mysqli_query($conn,$qz);
		while ($row=mysqli_fetch_array($resultz)) {
			$comment=$row['comments'];

			echo "<ul class='media-list'>";
			echo "<li class='media'>";
			echo "<div class='media-body'>";
	echo "	<i class='fa fa-user'></i>";	
		echo "<p>{$comment}</p>";
										echo "</div>";
									echo "</li>";
								echo "</ul>";
								}
							echo "</div>";
						echo "</div>";
					
						
						//<!-- COMMENTS END -->
						
					echo "</div>";

					//<!-- SIDEBAR START -->

					echo "<div class='col-sm-4' id='sidebar'>";

	?>
					

						<div class="sidebar-links" id="archives">
							
						</div>

						<div class="sidebar-widget" id="skills">
							<h2>Key skills</h2>
							<a class="badge">Photoshop</a>
							<a class="badge">HTML5</a>
							<a class="badge">CSS3</a>
							<a class="badge">Javascript</a>
							<a class="badge">jQuery</a>
							<a class="badge">User Experience</a>
							<a class="badge">User Interface</a>
							<a class="badge">UX</a>
							<a class="badge">UI</a>
							<a class="badge">Front End Development</a>
							<a class="badge">Responsive Design</a>
						</div>

			<div class="sidebar-links" id="recent-comments">
			<div class="sidebar-widget" id="widget-contact">


		<?php 
		

	 $qq="SELECT * FROM responsible WHERE id_responsible='$id_responsible'";
	 $result99=mysqli_query($conn,$qq);
	 while ($row=mysqli_fetch_array($result99)) {
	 	$name=$row['name'];
	 	$email=$row['email'];
	 	$phone=$row['phone'];

							echo "<p><h2>Contact</h2>";
							echo "<ul>";
	echo "<li><i class='fa fa-user'></i>{$name}</li>";
			echo "<li>&#9743 {$phone}</li>";
		echo "<li> &#9993 {$email}</li>";
		echo "</p>";
							echo "</ul>";
						echo "</div>";
						echo "</div>";

					echo "</div>";
				}
					?>
					<!-- SIDEBAR END -->

				</div>
			</div>
		</section>

		<!-- ============ CONTENT END ============ -->

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