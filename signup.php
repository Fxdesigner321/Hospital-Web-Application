<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>

<!-- Latest compiled and minified CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"/>
<link rel="stylesheet" href="./style.css"/>
<!-- Latest compiled JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>
<body>
<section class="vh-100 bg-image"
  style="background-image: url('./images/hero-bg.png'); background-size: cover; background-repeat: no-repeat;   ">
<div class="mask d-flex align-items-center  gradient-custom-3">
<div class="container h-100">
  
<br>
<br>
  <div class="row d-flex justify-content-center align-items-center h-100">
    <div class="col-12 col-md-9 col-lg-7 col-xl-6">
      <div class="card" style="border-radius: 15px;">
        <div class="card-body p-5">
          <h2 class="text-uppercase text-center mb-5">REGISTRATION</h2>

          <form action="#" method="POST" enctype="multipart/form-data">

            <div class="form-outline mb-4">
              <input type="text" id="form3Example1cg" class="form-control form-control-lg" name="Username"n required />
              <label class="form-label" for="form3Example1cg">Your Name</label>
            </div>

            <div class="form-outline mb-4">
              <input type="email" id="form3Example3cg" class="form-control form-control-lg" name="Email" required/>
              <label class="form-label" for="form3Example3cg">Your Email</label>
            </div>

            <div class="form-outline mb-4">
              <input type="password" id="form3Example4cg" class="form-control form-control-lg" name="Password" required/>
              <label class="form-label" for="form3Example4cg">Your Password</label>
            </div>

            <div class="form-outline mb-4">
      
              <input type="file" id="form3Example4cg" class="form-control form-control-lg" name="Profile" required/>
              <label class="form-label" for="form3Example4cg">Your Profile Picture</label>
            </div>


            <div class="form-outline mb-4">
              <input type="text" id="form3Example4cg" class="form-control form-control-lg" name="Phone" required/>
              <label class="form-label" for="form3Example4cg">Your Phone Number</label>
            </div>

            <div class="form-outline mb-4">
              <select class="form-select form-select-lg " aria-label=".form-select-lg example" name="Usertype" required>
                <option>Select...</option>
                <option value="0">Admin</option>
                <option value="1">User</option>
              </select>
              <br>
              <label class="form-label" for="form3Example4cg">Select Your Role</label>
            </div>

        

            <div class="d-flex justify-content-center">
              <button type="submit" name="submit" style="background-color:#4ea882"
                class="btn btn-block btn-lg gradient-custom-4 text-body">Register</button>
            </div>

            <p class="text-center text-muted mt-5 mb-0">Have already an account? <a href="login.php"
                class="fw-bold text-body"><u>Login here</u></a></p>

          </form>

        </div>
      </div>
    </div>
  </div>
  
<br>
<br>
</div>
</div>



<?php

if(isset($_POST["submit"])){

    $connect = mysqli_connect("localhost","root","","hospital");

    $Username =  $_POST["Username"];
    $Email =  $_POST["Email"];
    $Password =  $_POST["Password"];
    $Phone =  $_POST["Phone"];
    $Usertype =  $_POST["Usertype"];

    $Profilename =  $_FILES["Profile"]["name"];
    $profile_tmp = $_FILES["Profile"]["tmp_name"];
    $path = './profile/' . $Profilename ;

    move_uploaded_file($profile_tmp , $path);

    $insert="INSERT INTO `userdata`(`Id`, `Username`, `Email`, `Password`, `Profile-picture`, `Phone-Number` , `Usertype`) VALUES (NULL,'$Username','$Email','$Password','$Profilename','$Phone' , $Usertype)";

    mysqli_query($connect , $insert);

    header("Location: signin.php");

}



?>









</body>
</html>
</section>