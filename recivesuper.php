<?php
include('dbconfig.php');

session_start();

if (empty($_SESSION['id_supervisor'])) {
  header('Location: http://localhost/btps/homePage.php');
  die();
}

$id_supervisor=$_SESSION['id_supervisor'];


$id_stu=(isset($_SESSION['id_student']))? $_SESSION['id_student'] : "";
$query22 = "SELECT * from trainng WHERE id_stu = '$id_stu' ";
$result4=mysqli_query($conn,$query22);	
while ($row=mysqli_fetch_array($result4)) {
	   $id_stutr=$row['id_trainng'];

  if(isset($_POST["submit"]))
{
    $sql = "INSERT INTO evaluate (id_tr,id_sup,grade)
    VALUES ('$id_stutr','232332','".$_POST["grade"]."')";

    $result = mysqli_query($conn,$sql);

$b="UPDATE trainng SET state='completed' WHERE  id_trainng='$id_stutr' ";
$result11=mysqli_query($conn,$b);

}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>TraingSeek</title>
	<meta charset="utf-8">
		<title>TraingSeek</title>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
	<link rel="shortcut icon" href="images/favicon.png">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
 
	<link href="css/style.css" rel="stylesheet">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/perfect-scrollbar/perfect-scrollbar.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>


<body >
<form action= "recivesuper.php" method="post" enctype="multipart/form-data">
	<div class="fm-container">
			<!-- Menu -->
			<div class="menu">
				<div class="button-close text-right">
		<a class="fm-button"><i class="fa fa-close fa-2x"></i></a>
				</div>
				<ul class="nav">
<li ><a href="profilesupervisor.php">Homepage</a></li>
			<li><a href="profilesupervisor.php">Profile</a></li>
			<li><a href="trainees.php">trainees</a></li>
<li  class="active"><a href="recivesuper.php">Evaluate Reports</a></li>
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

		
	
		<?php


	echo "<div class='limiter'>";
		echo "<div class='container-table100'>";
			echo "<div class='wrap-table100'>";
			echo "	<div class='table100 ver1 m-b-110'>";
				echo "	<div class='table100-head'>";
					echo "	<table>";
					echo "		<thead>";
						echo "		<tr class='row100 head'>";
				echo "<th class='cell100 column1'>ID</th>";
				echo "	<th class='cell100 column2'>name</th>";
					echo "<th class='cell100 column3'>file </th>";
								echo "	<th class='cell100 column4'>grade</th>";
				echo "	<th class='cell100 column5'>submit</th>";
							echo "	</tr>";
							echo "</thead>";
						echo "</table>";
					echo "</div>";

		include('dbconfig.php');
 

					

$query22 = "SELECT * from submitrep ";
$result4=mysqli_query($conn,$query22);	
	
while ($row=mysqli_fetch_array($result4)) {
	   $id_stu=$row['id_stu'];
	   $file=$row['file'];
	   $_SESSION['file'] = $row['file'];
	  

$query220 = "SELECT * from student WHERE id_student ='$id_stu'  ";
$result42=mysqli_query($conn,$query220);	
while ($row=mysqli_fetch_array($result42)) {
         $name_stu=$row['first_name'];
         $id_stu=$row['id_student'];
	     $_SESSION['id_student'] =$row['id_student'];      
         $file= $_SESSION['file'];



					echo "<div class='table100-body js-pscroll'>";
						echo "<table>";
						echo "	<tbody>";
							echo "	<tr class='row100 body'>";
			echo "	<td class='cell100 column1'>{$id_stu}</td>";
				echo "	<td class='cell100 column2'>{$name_stu}</td>";
echo "<td class='cell100 column3'><button type='button' class='btn btn-sm'><a href=" . "uploads/". basename($_SESSION['file']) . ">
       resume  {$file}  </a>  </button></td>";
echo "<td class='cell100 column4'><input class='btn btn-info btn-sm' name='grade' type='text' ></td>";
echo "<td class='cell100 column5'><button name='submit' type='submit' class='btn btn-info btn-sm'>Submit</button></td>";
								echo "</tr>";

							
							echo "</tbody>";



							}
						}

						echo "</table>";
					echo "</div>";
				echo "</div>";
			echo "</div>";
		echo "</div>";
	echo "</div>";

		?>

	
</form>
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

 <?php

$query22 = "SELECT * from submitrep ";
$result4=mysqli_query($conn,$query22);	


		
while ($row=mysqli_fetch_array($result4)) {
	$id_stu=$row['id_stu'];
	$file=$row['file'];

 

	echo "<div class='row'>";
					echo "<div class='col-sm-3 col-md-2'>";		
echo "<img src='images/logo1.jpg' class='img-circle img-responsive'/>";
	echo "</div>";				
					echo "<div class='col-sm-9 col-md-10'>";
						echo "<blockquote>";
			echo "id student:<cite>{$id_stu}</cite>"; 
			
		
						echo "</blockquote>";
echo "<button type='button' class='btn btn-sm'><a href=" . "uploads/". basename($row['file']) . ">
      report  {$row['file']}  </a>  </button>";

					echo "</div>";
				echo "</div>";
						echo "<hr>";


		}

				  ?>




