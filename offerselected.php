<?php
include('dbconfig.php');

session_start();

if (empty($_SESSION['id_student'])) {
  header('Location: http://localhost/final/homePage.php');
  die();
}

$id_student=$_SESSION['id_student'];
$query2 = "SELECT * from student WHERE id_student = '$id_student'";
$result55=mysqli_query($conn,$query2);

?>


<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>TraingSeek</title>
  <link rel="shortcut icon" href="images/favicon.png">

  <!-- Main Stylesheet -->
  <link href="css/style.css" rel="stylesheet">
</head>

<body>
  <form action= "offerselected.php" method="post" enctype="multipart/form-data">
    <!-- ============ NAVBAR START ============ -->

    <div class="fm-container">
      <!-- Menu -->
      <div class="menu">
        <div class="button-close text-right">
          <a class="fm-button"><i class="fa fa-close fa-2x"></i></a>
        </div>
        <ul class="nav">
         <li ><a href="homePageS.php">Homepage</a></li>
      <li ><a href="reg_student.php">Profile</a></li>
      <li><a href="Recommendation.php">Recommended</a></li>
      <li ><a href="showOffers.php">Offers</a></li>
      <li class="active" ><a href="offerselected.php">Offers selected</a></li>
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
          <a href="logout.php">
            <img src="images/248930.png" width="50" height="50" id="logout"></a>
          </div>
          <div id="logo" class="pull-right">
          </div>

        </div>
      </header>
      <!-- ============ HEADER END ============ -->

      <!-- ============ TITLE START ============ -->
      <?php

      if (isset($_GET['id_offer'])) {

        $_SESSION['current_offer'] = $_GET['id_offer'];
  //TODO: check if the student already candidates to this offer
        $candidate = true;
        dipslayOffer($conn,$candidate); 
      } else 
      {
        $statusMsg = "";
        $id_offer = $_SESSION['current_offer'];

        if(isset($_POST["submit"]) && !empty($_FILES["file"]["name"])){
    // Allow certain file formats$statusMsg = '';
          $targetDir = "uploads/";
          $fileName = $id_student . basename($_FILES["file"]["name"]);

          $targetFilePath = $targetDir . $fileName;
          $fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);

          $allowTypes = array('jpg','png','jpeg','gif','pdf');
          if(in_array($fileType, $allowTypes)){
        // Upload file to server
            if(move_uploaded_file($_FILES["file"]["tmp_name"], $targetFilePath)){


             $insert = $conn->query( "INSERT INTO candidates (id_off,id_stu,file) VALUES ( '$id_offer','$id_student','".$fileName."')");

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
      echo "{$statusMsg}" ;
      dipslayOffer($conn,false);

    }



    

    ?>
    <?php
    
    function dipslayOffer($conn, $candidate) {
      $offer = $_SESSION['current_offer'];
      $query1="SELECT * from offers WHERE id_offer='$offer'" ;
      $result=mysqli_query($conn,$query1);

      while ($row=mysqli_fetch_array($result)) {

        $id_offer=$row[0];
        $jobtitle=$row[1];
        $location=$row[2];  
        $salary=$row[5];
        $jobtype=$row[6];
        $requirement=$row[8];
        $descriotion=$row[9];
        $name=$row[11];
        $id_res=$row['id_respon'];


        echo "<section id='title'>";
        echo " <div class='container'>";
        echo "<div class='row'>";
        echo "<div class='col-sm-12 text-center'>";
        echo "<h1>$jobtitle</h1>";
        echo "<h4>";
        echo "<span><i class='fa fa-map-marker'></i>$location</span>";
        echo "<span><i class='fa fa-clock-o'></i>$jobtype</span>";
        echo "<span><i class='fa fa-dollar'></i>$salary</span>";
        echo "<br>";echo "<br>";
        

$average = mysqli_query($conn,"SELECT  (AVG(location) + AVG(environment) + AVG(payment) + AVG(company)) /4  AS PA FROM rates WHERE id_respon='$id_res'");

while($row = mysqli_fetch_array($average))
{
$x=$row['PA'];
echo"<div id='demo'></div>";
if ($x < 0.0){
  echo "<span><i>&#9733</i> ";
}
if ($x < 1.0){
  echo "<span><i>&#9733</i> ";
}
elseif ($x < 2.0) {
  echo "<span><i>&#9733&#9733</i> ";
}
  
elseif ($x < 3.0) {
  echo "<span><i>&#9733&#9733&#9733</i> ";
}
elseif ($x < 4.0) {
  echo "<span><i>&#9733&#9733&#9733&#9733</i> ";
}
  
else {
  echo "<span><i>&#9733&#9733&#9733&#9733&#9733</i>";
}

echo"<script>";

echo"document.getElementById('demo').innerHTML =";
//echo "$x.toFixed(2)";
echo"</script>";
}
        echo "</span>";
        echo "</h4>";
        echo " </div>";
        echo "</div>";
        echo "</div>";
        echo "</section>";


   // <!-- ============ TITLE END ============ -->

    //<!-- ============ CONTENT START ============ -->

        echo "<section id='jobs'>";
        echo "<div class='container'>";
        echo "<div class='row'>";
        echo "<div class='col-sm-8'>";
        echo "<article>";
       
        echo "<h2>$name</h2>";
        $sq="SELECT * FROM responsible WHERE id_responsible = '$id_res'";
    $result100=mysqli_query($conn,$sq);
    while ($row=mysqli_fetch_array($result100)) {

        $f=$row['file'];

        echo "<img src= " . "uploads/". basename($row['file']) . " height='100' width='350' class='img-thumnail'/>";
         
      
        echo "<h3>Descriotion</h3>";
        echo "<p>$descriotion</p>";




     
        echo "<h3>Requirement</h3>";
        echo "<p>$requirement</p>";
       
        
   //]]if (!$candidate) {
   
        echo "<h3> Upload your cv </h3>";
            
        
        echo "<input name='file' type='file' >
        ";
    
   echo "  <h3>Join Us</h3>
 

      <input type='submit' name='submit' class='btn btn-info btn-sm'> apply your applcation</input></a>";
        echo "</article>";
        echo "</div>";
      }
    }
  }
    ?>
 
    

</section>

<!-- ============ CONTENT END ============ -->

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
          Designed &amp; Developed by <br><b>Ahmed Alazm <br>Taysear Swadain 
            <br> Rakan Alkhatib</b>
          </div>
        </div>
      </div>
    </div>
  </footer>


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