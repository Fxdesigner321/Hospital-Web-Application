<!DOCTYPE html>
<html>

<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />
  <link rel="shortcut icon" href="images/logo.png" type="">

  <title> Care group</title>

  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />

  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700;900&display=swap" rel="stylesheet">

  <!--owl slider stylesheet -->
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />

  <!-- font awesome style -->
  <link href="css/font-awesome.min.css" rel="stylesheet" />

  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="css/responsive.css" rel="stylesheet" />

</head>

<body class="sub_page">

  <div class="hero_area">

    <div class="hero_bg_box">
      <img src="images/hero-bg.png" alt="">
    </div>

    <!-- header section strats -->
    <?php

include_once('header.php');
?>


    <!-- end header section -->
  </div>

  <!-- doctor section -->

  <section class="doctor_section layout_padding">
    <div class="container">

    <div class="heading_container heading_center">
        
        <h2>
          Our Doctors
        </h2>
        <p class="col-md-10 mx-auto px-0">
        Doctors, also known as physicians, are licensed health professionals who maintain and restore human health through the practice of medicine. They examine patients, review their medical history, diagnose illnesses or injuries, administer treatment, and counsel patients on their health and well-being. </p>
      </div>

      <br><br>

<?php
    if($_SESSION["city"] == ""){
      ?>
          <div class="col-md-12">

<form action="#" method="POST">

<input class="form-control" type="text" placeholder="Search.." name="search" id="search" autocomplete="off">
 <br>
 <center>
 <button class="btn btn-success" type="submit" name="submit">Search</button>
    </center>
</form>

 </div>


      <?php
    }
?>

      <div class="row">

           
  <?php


  
$connect = mysqli_connect("localhost","root","","hospital");

$query = "SELECT * FROM `doctors`";
$city = $_SESSION["city"];

if ($_SESSION["city"] != null) {

  $query = "SELECT * FROM `doctors` WHERE `city` = '$city'";


  
$result = mysqli_query($connect , $query);

if(mysqli_num_rows($result)){

  while($data = mysqli_fetch_array($result)){
    ?>
<div class="col-sm-6 col-lg-4 mx-auto">
          <div class="box">
            <div class="img-box">
              <img src="./Admin-interface/Profiles/<?php echo $data[4]; ?>" alt="" width="350" height="350">
            </div>
            <div class="detail-box">
              <div class="social_box">
                <a href="">
                  <i class="fa fa-facebook" aria-hidden="true"></i>
                </a>
                <a href="">
                  <i class="fa fa-twitter" aria-hidden="true"></i>
                </a>
                <a href="">
                  <i class="fa fa-youtube" aria-hidden="true"></i>
                </a>
                <a href="">
                  <i class="fa fa-linkedin" aria-hidden="true"></i>
                </a>
              </div>
              <h5>Name : DR.
              <?php echo $data[1]; ?>
              </h5>
              <h5>Title : 
              <?php echo $data[20]; ?>
              </h5>
              <h6 class="">
              <?php echo $data[2]; ?>
              </h6>
            </div>
          </div>
        </div>
        

        <?php
        
  }
}

}
else if(isset($_POST["submit"])){
  $search = $_POST["search"];
  $query = "SELECT * FROM `doctors` WHERE `Title` LIKE '%$search%'";

  
$result = mysqli_query($connect , $query);

if($result){

  
if(mysqli_num_rows($result)){

  while($data = mysqli_fetch_array($result)){
    ?>
<div class="col-sm-6 col-lg-4 mx-auto">
          <div class="box">
            <div class="img-box">
              <img src="./Admin-interface/Profiles/<?php echo $data[4]; ?>" alt="" width="350" height="350">
            </div>
            <div class="detail-box">
              <div class="social_box">
                <a href="">
                  <i class="fa fa-facebook" aria-hidden="true"></i>
                </a>
                <a href="">
                  <i class="fa fa-twitter" aria-hidden="true"></i>
                </a>
                <a href="">
                  <i class="fa fa-youtube" aria-hidden="true"></i>
                </a>
                <a href="">
                  <i class="fa fa-linkedin" aria-hidden="true"></i>
                </a>
              </div>
              <h5>Name : DR.
              <?php echo $data[1]; ?>
              </h5>
              <h5>Title : 
              <?php echo $data[20]; ?>
              </h5>
              <h6 class="">
              <?php echo $data[2]; ?>
              </h6>
            </div>
          </div>
        </div>
        

        <?php
        
  }
}

  
}else{
  echo "no search found";
}


}
else{

$result = mysqli_query($connect , $query);

if(mysqli_num_rows($result)){

  while($data = mysqli_fetch_array($result)){
    ?>
<div class="col-sm-6 col-lg-4 mx-auto">
          <div class="box">
            <div class="img-box">
              <img src="./Admin-interface/Profiles/<?php echo $data[4]; ?>" alt="" width="350" height="350">
            </div>
            <div class="detail-box">
              <div class="social_box">
                <a href="">
                  <i class="fa fa-facebook" aria-hidden="true"></i>
                </a>
                <a href="">
                  <i class="fa fa-twitter" aria-hidden="true"></i>
                </a>
                <a href="">
                  <i class="fa fa-youtube" aria-hidden="true"></i>
                </a>
                <a href="">
                  <i class="fa fa-linkedin" aria-hidden="true"></i>
                </a>
              </div>
              <h5>Name : DR.
              <?php echo $data[1]; ?>
              </h5>
              <h5>Title : 
              <?php echo $data[20]; ?>
              </h5>
              <h6 class="">
              <?php echo $data[2]; ?>
              </h6>
            </div>
          </div>
        </div>
        

        <?php
        
  }
}}
?>
   
        
      </div>
 
    </div>
  </section>

  <!-- end doctor section -->

  <!-- footer section -->
  <?php

include_once('footer.php');
?>
  <!-- footer section -->

  <!-- jQery -->
  <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
  <!-- popper js -->
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
  </script>
  <!-- bootstrap js -->
  <script type="text/javascript" src="js/bootstrap.js"></script>
  <!-- owl slider -->
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js">
  </script>
  <!-- custom js -->
  <script type="text/javascript" src="js/custom.js"></script>
  <!-- Google Map -->
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCh39n5U-4IoWpsVGUHWdqB6puEkhRLdmI&callback=myMap">
  </script>
  <!-- End Google Map -->

</body>



</html>