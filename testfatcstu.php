<?php

include('dbconfig.php');

session_start();

if (empty($_SESSION['id_student'])) {
  header('Location: http://localhost/final/homePage.php');
  die();
}

$id_student=$_SESSION['id_student'];

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
<body>
<form action= "testfatcstu.php" method="post" enctype="multipart/form-data">
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
		<li><a href="company profile1.php">company profile</a></li>
			<li class="active"><a href="testfatcstu.php">submit report</a></li>
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
		
                   
		 <h2>Student submit</h2>
             
            
<?php
include('dbconfig.php');
        
        

        if(isset($_POST['submit']) && !empty($_FILES["file"]["name"])){
    // Allow certain file formats$statusMsg = '';
          $targetDir = "uploads/";
          $fileName = $id_student . basename($_FILES["file"]["name"]);

          $targetFilePath = $targetDir . $fileName;
          $fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);

          $allowTypes = array('jpg','png','jpeg','gif','pdf');
          if(in_array($fileType, $allowTypes)){
        // Upload file to server
            if(move_uploaded_file($_FILES["file"]["tmp_name"], $targetFilePath)){


             $insert = $conn->query( "INSERT INTO submitrep (id_stu,id_sup,file) VALUES ( '$id_student','232332','".$fileName."')");

             if($insert){
              $statusMsg = "The file ".$fileName. " has been uploaded successfully.";
            }else{
              $statusMsg = "File upload failed, please try again.";
            } 
          }else{
            $statusMsg = "Sorry, there was an error uploading your file." . $_FILES["file"]["error"];
            
          }
        }else{
          $statusMsg = 'Sorry, only JPG, JPEG, PNG, GIF, & PDF files are allowed to upload.';
        }
      }else{
        $statusMsg = 'Please select a file to upload.';

      }
      



	echo "<div class='limiter'>";
		echo "<div class='container'>";
			echo "<div class='wrap-table100'>";
			echo "	<div class='table100 ver1 m-b-110'>";
				echo "	<div class='table100-head'>";
					echo "	<table>";
					echo "		<thead>";
						echo "		<tr class='row100 head'>";
				echo "<th class='cell100 column1'>ID</th>";
				echo "	<th class='cell100 column2'>state</th>";
					echo "<th class='cell100 column3'>file </th>";
					echo "	<th class='cell100 column4'>grade</th>";
				echo "	<th class='cell100 column5'></th>";
							echo "	</tr>";
							echo "</thead>";
						echo "</table>";
					echo "</div>";				
$grade=(isset($_SESSION['grade']))? $_SESSION['grade'] : "";
   

    $q20="SELECT * from trainng WHERE id_stu ='$id_student' ";
    $result3=mysqli_query($conn,$q20);    
    while ($row=mysqli_fetch_array($result3)) {
           
     $id_trainng=$row['id_trainng'];
     $id_stu=$row['id_stu'];
     $state=$row['state'];
  
$_SESSION['id_trainng'] =$row['id_trainng'];
   
					echo "<div class='table100-body js-pscroll'>";
						echo "<table>";
						echo "	<tbody>";
							echo "	<tr class='row100 body'>";
			echo "	<td class='cell100 column1'>{$id_stu}</td>";
			echo "	<td class='cell100 column2'>{$state}</td>";
echo "<td class='cell100 column3'><input name='file' type='file'>";
echo "<td class='cell100 column4'>{$grade}</td>";
echo "<td class='cell100 column5'><button name='submit' type='submit' class='btn btn-info btn-sm'>Submit</button></td>";
								echo "</tr>";

							
							echo "</tbody>";

			 $id_trainng= $_SESSION['id_trainng'];
 $q200="SELECT * from evaluate WHERE id_tr ='$id_trainng' ";
        $result30=mysqli_query($conn,$q200); 
       while ($row=mysqli_fetch_array($result30)) {
          $grade=$row['grade'];
          $_SESSION['grade'] =$row['grade'];
          
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
		
		<!-- Flex Menu Plugin -->
		<script src="js/jquery.flexmenu.js"></script>

		<!-- Slider Plugin -->
		<script src="js/jquery.ba-cond.min.js"></script>
		<script src="js/jquery.slitslider.js"></script>

		<!-- Carousel Plugin -->
		<script src="js/owl.carousel.min.js"></script>

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