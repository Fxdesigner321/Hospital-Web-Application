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
  <script src="https://kit.fontawesome.com/yourcode.js" crossorigin="anonymous"></script>

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

  <!-- department section -->

  <section class="department_section layout_padding">
    <div class="department_container">
      <div class="container ">
        <div class="heading_container heading_center">
          <h2>
            Our Departments
          </h2>
          <p>
          Definitions and descriptions of the most common hospital departments and the services provided by each section. Common hospital support units include a dispensary or pharmacy, pathology, and radiology, and on the non-medical side, there often are medical records departments and/or a release of information department. Hospitals may have acute services such as an emergency department or specialist trauma center, burn unit, surgery, or urgent care. </p>
        </div>
        <div class="row">
        
  <?php

  
$connect = mysqli_connect("localhost","root","","hospital");
$query = "SELECT * FROM `services`";

$result = mysqli_query($connect , $query);

if(mysqli_num_rows($result)){

  while($data = mysqli_fetch_array($result)){
    ?>

      
          <div class="col-md-3">
            <div class="box ">
              <div class="img-box">
                <img src="./Admin-interface/<?php echo $data[1]; ?>" width="90" height="60">
              </div>
              <div class="detail-box">
                <h5>
                <?php echo $data[2]; ?>
                </h5>
                <p>
                <?php echo $data[3]; ?>
                </p>
              </div>
            </div>
          </div>

        <?php
        
  }
}
?>

</div>
   
      </div>
    </div>
  </section>

  <!-- end department section -->

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