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
    <!-- header section strats -->
    <?php

include_once('header.php');
?>


    <!-- end header section -->
  </div>

  <!-- contact section -->
  <section class="contact_section layout_padding">
    <div class="container">

      <div class="row">
      <div class="heading_container col-md-6">
        <h2>
        Your request for Appointment has been received!
</h2>
<hr>
<h2>
     Your details have been noted ,  we will get back to you on your provided email with details.
        </h2>
      </div>

        <div class="col-md-6">
          <div class="container" style="width:100%;">
            
              <div ><img src="./images/appointment.png"></div>
          
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- end contact section -->

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



<?php

if(isset($_POST["submit"])){

   

    $name =  $_POST["name"];
    $Age =  $_POST["Age"];
    $phone =  $_POST["phone"];
    $Email =  $_POST["Email"];
  
    $Doctor =  $_POST["Doctor"];
    $Department =  $_POST["Department"];
  
    $Time =  $_POST["Time"];
    $Date =  $_POST["Date"];

    $insert="INSERT INTO `appointments` (`Id`, `Department`, `Doctor_name`, `Patient_name`, `Patient_Age`, `Email`, `Appointment_Date`, `Appointment_Time`, `Patient_phone`) 
    VALUES (NULL, '$Department', '$Doctor', '$name', '$Age', '$Email', '$Date', '$Time', '$phone');";

    mysqli_query($connect , $insert);
?>
<script>
  alert("Thank you for Reaching us! We will Contact you through provided Email for Appointment Confirmation.");
</script>
<?php
    header("Location: appointment.php");

}



?>
