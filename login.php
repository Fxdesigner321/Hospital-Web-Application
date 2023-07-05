


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>

<!-- Latest compiled and minified CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<link href="style.css" rel="stylesheet">
<!-- Latest compiled JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>
<body>
<section class="vh-100 bg-image"
  style="background-image: url('./images/hero-bg.png'); background-size: cover; background-repeat: no-repeat;   ">
<div class="mask d-flex align-items-center h-100  gradient-custom-3">
<div class="container h-100">
  
  <div class="row d-flex justify-content-center align-items-center h-100">
    <div class="col-12 col-md-9 col-lg-7 col-xl-6">
      <div class="card" style="border-radius: 15px;">
        <div class="card-body p-5">
          <h2 class="text-uppercase text-center mb-5">Login</h2>

          <form action="#" method="POST" >


            <div class="form-outline mb-4">
              <input type="email" id="form3Example3cg" class="form-control form-control-lg" name="Email" />
              <label class="form-label" for="form3Example3cg">Your Email</label>
            </div>

            <div class="form-outline mb-4">
              <input type="password" id="form3Example4cg" class="form-control form-control-lg" name="Password" />
              <label class="form-label" for="form3Example4cg">Your Password</label>
            </div>

        

            <div class="d-flex justify-content-center">
              <button type="Submit" name="submit" style="background-color:#4ea882"
                class="btn  btn-block btn-lg gradient-custom-4 text-body">Login</button>
            </div>

            <p class="text-center text-muted mt-5 mb-0">Don't have an account? <a href="signup.php"
                class="fw-bold text-body"><u>Register here</u></a></p>

          </form>

        </div>
      </div>
    </div>
  </div>
  
</div>
</div>
</section>

<?php

if(isset($_POST["submit"])){

  session_start();

    $connect = mysqli_connect("localhost","root","","hospital");

 
    $email =  $_POST["Email"];
    $Password =  $_POST["Password"];



    $query = "SELECT * FROM `patients` where `email` = '$email' AND  `Password` = '$Password'";
    $result = mysqli_query($connect , $query);

    if(mysqli_num_rows($result)){

        while( $data = mysqli_fetch_array($result)){

          $_SESSION["id"] = $data[0];
          $data[0] = $_SESSION["id"];

          $_SESSION["Name"] = $data[1];
          $data[1] = $_SESSION["Name"];
     
          $_SESSION["picture"] = $data[7];
          $data[7] = $_SESSION["picture"];

               
          $_SESSION["phone-number"] = $data[4];
          $data[4] = $_SESSION["phone-number"];


               
          $_SESSION["email"] = $data[5];
          $data[5] = $_SESSION["email"];

                    
          $_SESSION["age"] = $data[2];
          $data[2] = $_SESSION["age"];

               
          $_SESSION["birthday"] = $data[11];
          $data[11] = $_SESSION["birthday"];


               
          $_SESSION["address"] = $data[3];
          $data[3] = $_SESSION["address"];


               
          $_SESSION["gender"] = $data[6];
          $data[6] = $_SESSION["gender"];


          $_SESSION["patient_id"] = $data[9];
          $data[9] = $_SESSION["patient_id"];

          $_SESSION["year_joined"] = $data[10];
          $data[10] = $_SESSION["year_joined"];

          $_SESSION["disease"] = $data[12];
          $data[12] = $_SESSION["year_joined"];

          $_SESSION["disease_detail"] = $data[13];
          $data[13] = $_SESSION["disease_detail"];

          $_SESSION["disease_2"] = $data[14];
          $data[14] = $_SESSION["disease_detail"];

          $_SESSION["disease2_detail"] = $data[15];
          $data[15] = $_SESSION["disease2_detail"];

          
          $_SESSION["city"] = $data[16];
          $data[16] = $_SESSION["city"];

          
          $_SESSION["country"] = $data[17];
          $data[17] = $_SESSION["country"];


                  
        header("Location:index.php");

        }

  
    }

    else{
        echo "Invalid Email or Password";

    }
}


?>

</body>
</html>