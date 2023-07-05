<?php

$connect = mysqli_connect("localhost","root","","hospital");
session_start();
?>

 <!-- header section strats -->
 <header class="header_section">
      <div class="container">
        <nav class="navbar navbar-expand-xl custom_nav-container ">
          <a class="navbar-brand" href="index.php">
            <img rel="shortcut icon" src="images/logo.png" width="60">
            <span>
              CARE GROUP
            </span>
          </a>

          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class=""> </span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav">
              <li class="nav-item active">
                <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="doctors.php">Doctors</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="diseases.php">Diseases</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="departments.php">Services</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="about.php"> About</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="contact.php">Contact</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="appointment.php">Appointment</a>
              </li>
    
   
            </ul>
            <ul class="navbar-nav">

            <?php
        
            error_reporting(0);
              if($_SESSION["Name"] == ""){
                ?>
                <li class="nav-item">
                <a class="nav-link" href="signup.php">Register</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="login.php">Login</a>
              </li>
                <?php
              }
              else{
                ?>

      <li class="nav-item dropdown has-arrow ml-5">
                    <a href="#" class="dropdown-toggle nav-link user-link" data-toggle="dropdown">
        
						<span><?php echo $_SESSION["Name"]; ?></span>
            <span >
							<img class="rounded-circle" src="./profile/<?php echo $_SESSION["picture"]; ?>"  width="70" alt="patient">
							<span class="status online"></span>
						</span>
                    </a>
					<div class="dropdown-menu">
						<a class="dropdown-item" href="profile.php">My Profile</a>
						<a class="dropdown-item" href="editpatient_profile.php?id=<?php echo $_SESSION["id"];?>">Edit Profile</a>
						<a class="dropdown-item" href="logout.php">Logout</a>
					</div>
      </li>
  
            
    
              <!-- <li class="nav-item mt-3 ml-5/">
                <a class="nav-link" href="profile.php">Profile</a>
              </li> 
              <li class="nav-item mt-3 ">
                <a class="nav-link" href="logout.php">Logout</a>
              </li>
        
            
              <img class="rounded-circle ml-4 " src="./profile/<?php echo $_SESSION["picture"];?>" width="70px" alt="">
          </div> -->
            
                <?php
              }

            ?>
</ul>
          </div>
        </nav>
      </div>
    </header>
    <!-- end header section -->