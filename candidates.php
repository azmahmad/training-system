<?php
include('dbconfig.php');
 session_start();


       if (empty($_SESSION['id_responsible'])) {
        header('Location: http://localhost/final/homePage.php');
        die();
        }
	    $id_responsible=$_SESSION['id_responsible']; 
$id_stu1=(isset($_SESSION['current_idsoffer']))? $_SESSION['current_idsoffer'] : "";
$id_off=(isset($_SESSION['current_idooffer']))? $_SESSION['current_idooffer'] : "";
    
  

  if(isset($_POST["Accept"]))
{

$sql0 = "INSERT INTO trainng ( id_stu, id_off, id_res ,id_sup, state) 
VALUES ('$id_stu1','$id_off','$id_responsible','232332','in trainng')";
 $result111=mysqli_query($conn,$sql0);

 $a ="UPDATE candidates SET state='Accepted' WHERE id_stu= '$id_stu1' AND id_off='$id_off' ";
 $result11=mysqli_query($conn,$a);

 $b="UPDATE offers SET state= 'Unavailable' WHERE  id_offer='$id_off' ";
$result11=mysqli_query($conn,$b);

$C ="DELETE FROM candidates WHERE id_stu = '$id_stu1' AND id_off != '$id_off' ";
$result11=mysqli_query($conn,$C);

	}

	elseif (isset($_POST["Reject"])) {

$d ="UPDATE candidates SET state='Rejected' WHERE id_stu !='$id_stu1' AND id_off='$id_off' ";
 $result11=mysqli_query($conn,$d);
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
<form method="post" action="candidates.php"  enctype="multipart/form-data">
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
<li><a href="post a offer.php">Post an offer</a></li>
<li class="active"><a href="candidates.php">Candidates</a></li>
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

		<!-- ============ TITLE START ============ -->

		<section id="title">
			<div class="container">
				<div class="row">
					<div class="col-sm-12 text-center">
						<h1>candidates</h1>
						<h4>Kind words from happy members</h4>
					</div>
				</div>
			</div>
		</section>

		<!-- ============ TITLE END ============ -->

		<!-- ============ TESTIMONIALS START ============ -->

		<section id="testimonials-long">
			<div class="container">

				<!-- Testimonial 1 -->
 <?php


   $q20="SELECT * from offers WHERE id_respon ='$id_responsible' ";
        $result3=mysqli_query($conn,$q20);
            
    	while ($row=mysqli_fetch_array($result3)) {
	          $id_offeer=$row['id_offer'];
	          $i=$row['jobtitle'];


$query22 = "SELECT * from candidates WHERE id_off = '$id_offeer' ";
$result4=mysqli_query($conn,$query22);	


		
while ($row=mysqli_fetch_array($result4)) {
	$id_stu=$row['id_stu'];
	$id_off=$row['id_off'];
    $state=$row['state'];

	$_SESSION['current_idsoffer'] =$row['id_stu']; 
	$_SESSION['current_idooffer'] =$row['id_off'];


	echo "<div class='row'>";
					echo "<div class='col-sm-3 col-md-2'>";		
echo "<img src='images/000.jpg' class='img-circle img-responsive'/>";
	echo "</div>";				
					echo "<div class='col-sm-9 col-md-10'>";
						echo "<blockquote>";
			echo "id student:<cite>{$id_stu}</cite>"; 
			echo "<br>Request: <cite> {$i}</cite>";
			echo "<br>State: <cite> {$state}</cite>";
		
						echo "</blockquote>";


echo " <button type='Accept' name = 'Accept'  class='btn btn-success btn-sm'>Accept</button>";
echo "<button type='Reject'  name = 'Reject' class='btn btn-danger btn-sm' >Reject</button> "; 
echo "<button type='button' class='btn btn-sm'><a href=" . "uploads/". basename($row['file']) . ">
       resume  {$row['file']}  </a>  </button>";

					echo "</div>";
				echo "</div>";
						echo "<hr>";

$q="SELECT * from candidates WHERE id_stu='$id_stu' ";
$result=mysqli_query($conn,$q);

	while ($row=mysqli_fetch_array($result)) {
	$id_stu=$row['id_stu'];
	$id_off=$row['id_off'];
	$_SESSION['current_idsoffer'] =$row['id_stu']; 
	$_SESSION['current_idooffer'] =$row['id_off'];
		$file=$row['file'];
	}
}
		}

				  ?>






			</div>
		</section>

	

		<!-- ============  END ============ -->

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

</form>
	</body>
</html>