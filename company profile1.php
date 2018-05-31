<?php
		include('dbconfig.php');
     session_start();
       if (empty($_SESSION['id_student'])) {
        header('Location: http://localhost/final/homePage.php');
        die();
        }

        $id_student=$_SESSION['id_student']; 
 
      ?>
      <?php

      	$qs="SELECT * FROM trainng WHERE id_stu='$id_student'";
		$result88=mysqli_query($conn,$qs);
		while ($row=mysqli_fetch_array($result88)) {
	          $id_res=$row['id_res'];
              $id_off=$row['id_off'];
	          $_SESSION['id_res']=$row['id_res'];
	              $_SESSION['id_off']=$row['id_off'];
	      }

      ?>
<!DOCTYPE html>
<html>
	<head>
		
		<title>TraingSeek</title>
		<link rel="shortcut icon" href="images/favicon.png">

		<!-- Main Stylesheet -->
		<link href="css/style.css" rel="stylesheet">

		<!-- HTML5 shiv and Respond.js IE8 support of HTML5 elements and media queries -->
		<!--[if lt IE 9]>
		<script src="js/html5shiv.js"></script>
		<script src="js/respond.min.js"></script>
		<![endif]-->

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
			<li><a href="Recommendation.php">Recommended</a></li>
			<li><a href="showOffers.php">Offers</a></li>
			<li><a href="sturequst.php">watchlist Offers</a></li>
		<li class="active"><a href="company profile1.php">company profile</a></li>
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

		$id_res=$_SESSION['id_res'];
		$id_off=$_SESSION['id_off'];

		$sq="SELECT * FROM student WHERE id_student='$id_student'";
		$result100=mysqli_query($conn,$sq);
		while ($row=mysqli_fetch_array($result100)) {
				$name=$row['first_name'];

		$qss="SELECT * FROM offers WHERE id_offer='$id_off'";
		$result99=mysqli_query($conn,$qss);
		while ($row=mysqli_fetch_array($result99)) {
		$jobtitle=$row['1'];
	 	$date_offer=$row['7'];
	 	$salary=$row['salary'];
	 	$requirement=$row['requirement'];
	 	//$phone=$row['phone'];
					
					echo "	<h1>{$jobtitle}</h1>";
						echo "<div class='meta'>";
				echo "<span><i class='fa fa-user'></i>{$name}</span>";
	echo "<span><i class='fa fa-calendar'></i>{$date_offer}</span>";
echo "<span><i class='fa fa-dollar'></i>{$salary}</span>";
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


//						//<!-- POSTS START -->
 $query = "SELECT * FROM responsible where id_responsible ='$id_res'    ";  
                $result = mysqli_query($conn, $query);  
                while($row = mysqli_fetch_array($result))  
                {  
                	$f=$row['file'];
                	$d=$row['descriotion'];
                	 $_SESSION['descriotion']=$row['descriotion'];

                	
						echo "<article>";
echo "<p><img src= " . "uploads/". basename($row['file']) . " height='300' width='350' class='img-thumnail'/> </p> "; 
		//	              
							echo "<h3>Requirements</h3>";
							echo "<ul>{$requirement}</ul>";
						echo "</article>";
		}
	}
}

						echo "<hr>";

						//<!-- COMMENTS START -->
						echo "<div class='row'>";
							echo "<div class='col-sm-12'>";
				echo "<h2>Comments</h2>";

		$qz="SELECT * FROM rates WHERE id_respon='$id_res'";
		$resultz=mysqli_query($conn,$qz);
		while ($row=mysqli_fetch_array($resultz)) {
			$comment=$row['comments'];

			echo "<ul class='media-list'>";
			echo "<li class='media'>";
			echo "<div class='media-body'>";
			echo " <a>{$name} </a>";
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

echo "<div class='sidebar-links' id='categories'>";
echo "<div class='sidebar-widget' id='company'>";
	echo "	<h2>About this company</h2>";

     $d= $_SESSION['descriotion'];
         echo "   <p>{$d}</p>";
	?>
						</div>
						</div>

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
		$id_res=$_SESSION['id_res'];

	 $qq="SELECT * FROM responsible WHERE id_responsible='$id_res'";
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
<form method="post" action="company profile1.php" enctype="form-data/multipart">


		<?php
$comments = isset($_POST[ "comments" ]) ? $_POST[ "comments" ] : "";
$location = isset($_POST[ "location" ]) ? $_POST[ "location" ] : "";
$environment = isset($_POST[ "environment" ]) ? $_POST[ "environment" ] : "";
$payment = isset($_POST[ "payment" ]) ? $_POST[ "payment" ] : "";
$company = isset($_POST[ "company" ]) ? $_POST[ "company" ] : "";

		$q="SELECT * FROM trainng WHERE id_stu='$id_student'";
		$result=mysqli_query($conn,$q);
		while ($row=mysqli_fetch_array($result)) 
		{
		$id_trainng=$row['id_trainng'];
	          $id_stu=$row['id_stu'];
	          $id_res=$row['id_res'];





		if(isset($_POST["submit"]))
{	

$sql = "INSERT INTO rates (id_tr, id_respon, comments, location, environment, payment,company) VALUES ('$id_trainng','$id_res','".$_POST["comments"]."','".$_POST["location"]."','".$_POST["environment"]."','".$_POST["payment"]."','".$_POST["company"]."' )";

		$result2 = mysqli_query($conn,$sql);
		}
?>

<?php
		echo "<section id='contact' class='color2'>";
			echo "<div class='container'>";
				echo "<div class='row'>";
					echo "<div class='col-sm-6'>";
						echo "<h2>Post a Comment</h2>";

echo "<div class='form-group' id='contact-message-group'>";
echo "<label for='contact-message' class='sr-only'>Message</label>";
echo "<textarea name='comments' type='comments' class='form-control' rows='9' id='contact-message'></textarea>";
						echo "</div>";
						}
					



	echo "</div>";

				echo "<div class='col-sm-5'>";
						echo "<h2>criteria</h2>";
						echo "<div class='row'>";
							echo "<div class='col-sm-5'>";
								echo "<h5>Location</h5>";
echo " 
			<select name='location' class='form-control' id='resume-category'>
				<option name= '1' value='1'>1</option>
				<option name= '2' value='2'>2</option>
				<option name= '3' value='3'>3</option>
				<option name= '4' value='4'>4</option>
				<option name= '5' value='5'>5</option>
			</select>
	
  </div>
 ";
					
				echo "<div class='col-sm-5'>";		
			echo "<h5>environment</h5>";
       echo " 
			<select name='environment' class='form-control' id='resume-category'>
				<option name= '1' value='1'>1</option>
				<option name= '2' value='2'>2</option>
				<option name= '3' value='3'>3</option>
				<option name= '4' value='4'>4</option>
				<option name= '5' value='5'>5</option>
			</select>
	
  </div>

 ";		
		

			echo "<div class='col-sm-5'>";
			echo "<br>";
			echo "	<h5>payment</h5>";
		    echo " 
			<select name='payment' class='form-control' id='resume-category'>
				<option name= '1' value='1'>1</option>
				<option name= '2' value='2'>2</option>
				<option name= '3' value='3'>3</option>
				<option name= '4' value='4'>4</option>
				<option name= '5' value='5'>5</option>
			</select>
	
  </div>
 ";
				echo "<div class='col-sm-5'>";
				echo "<br>";
					echo "<h5>company</h5>";
		    echo " 

			<select name='company' class='form-control' id='resume-category'>
				<option name= '1' value='1'>1</option>
				<option name= '2' value='2'>2</option>
				<option name= '3' value='3'>3</option>
				<option name= '4' value='4'>4</option>
				<option name= '5' value='5'>5</option>
			</select>
	
  </div>
 ";
							echo "</div>";
						echo "</div>";

					echo "</div>";

	
					echo "</div>";
				echo "</div>";
				echo "<br>";
echo "<center><button name='submit' class='btn btn-default'>Submit</button></center>";
					echo "</form>";
			echo "</div>";
		echo "</section>";
	
?>
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