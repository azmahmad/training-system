<?php
include('dbconfig.php');
 session_start();

       if (empty($_SESSION['id_supervisor'])) {
        header('Location: http://localhost/btps/homePage.php');
        die();
        }


        ?>
<!DOCTYPE html>
<html>
	<head>
		<!-- tabel Stylesheet -->
		<link rel="stylesheet" type="text/css" href="css/perfect-scrollbar.css">
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
	<!-- Main Stylesheet -->
		<link href="css/style.css" rel="stylesheet">



		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<meta name="description" content="Jobseek - Job Board Responsive HTML Template">
		<meta name="author" content="Coffeecream Themes, info@coffeecream.eu">
		<title>HomePage</title>
		<link rel="shortcut icon" href="images/favicon.png">
		<!-- HTML5 shiv and Respond.js IE8 support of HTML5 elements and media queries -->
		<!--[if lt IE 9]>
		<script src="js/html5shiv.js"></script>
		<script src="js/respond.min.js"></script>
		<![endif]-->

	</head>
	<body >

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
<li  ><a href="profilesupervisor.php">Homepage</a></li>
			<li><a href="profilesupervisor.php">Profile</a></li>
	<li class="active"><a href="trainees.php">trainees</a></li>
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
		<div id="logo" class="pull-right"><a href="homePage.php">
<img width="155" src="images/Training-Industry.png"/></a>
			</div>
			</div>
		</header>
		<!-- ============ HEADER END ============ -->

		<?php
include('dbconfig.php');
		//#6c7ae0 color of the box

		echo "<div class='limiter'>";
		echo "<div class='container-table100'>";
			echo "<div class='wrap-table100'>";
			echo "	<div class='table100 ver1 m-b-110'>";
				echo "	<div class='table100-head'>";
					echo "<table>";
							"<thead>";
					echo "<tr class='row100 head'>";	
			echo "<th class='cell100 column1'>Student name</th>";
					echo "<th class='cell100 column2'>Major</th>";
					echo "<th class='cell100 column3'>Gender</th>";
					echo "	<th class='cell100 column4'>Email</th>";
				echo "<th class='cell100 column5'>State</th>";
					echo "</tr>";
						echo "</thead>";
					echo "	</table>";
					
   $query2= "SELECT * FROM trainng WHERE id_sup= '232332'";
	$result=mysqli_query($conn,$query2);
	while ($row=mysqli_fetch_array($result)){
		$id_student=$row['id_stu'];
		$state=$row['state'];
	

	$query="SELECT * FROM student WHERE id_student = '$id_student' ";
	$result2=mysqli_query($conn,$query);

	while ($row=mysqli_fetch_array($result2))
	{


	
		$first_name=$row[1];
		$email=$row[3];
		$gender=$row[5];
		$major=$row[6];
	

					echo "</div>";
					echo "<div class='table100-body js-pscroll'>";
					echo "<table>";
					echo "<tbody>";
						echo "<tr class='row100 body'>";
echo "<td class='cell100 column1'><a href='#'>{$first_name}</a></td>";
echo "	<td class='cell100 column2'>{$major}</td>";
	echo "	<td class='cell100 column3'>{$gender}</td>";
		echo "	<td class='cell100 column4'>{$email}</td>";
			echo "<td class='cell100 column5'>{$state}</td>";
					echo "</tr>";
					echo "</tbody>";

					echo "</table>";
				}}
				echo "</div>";
			echo "</div>";


	
  ?>



  <br>

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

		<!--===============================================================================================-->	
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/perfect-scrollbar/perfect-scrollbar.min.js"></script>
	<script>
		$('.js-pscroll').each(function(){
			var ps = new PerfectScrollbar(this);

			$(window).on('resize', function(){
				ps.update();
			})
		});
			
		
	</script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>


	</body>
</html>
