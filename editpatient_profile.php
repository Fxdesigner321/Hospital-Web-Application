<?php

$connect = mysqli_connect("localhost","root","","hospital");
$id = $_GET["id"];
$select = "SELECT * FROM `patients` WHERE `id` = $id";

$fetchselect = mysqli_query( $connect , $select);

if(mysqli_num_rows($fetchselect)){
    while ($row = mysqli_fetch_array($fetchselect)){


?>
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
  <link rel="stylesheet" type="text/css" href="./Admin-interface/assets/css/style.css">


</head>

<body class="sub_page">

  <div class="hero_area">
    <!-- header section strats -->
    <?php

    include_once('header.php');
    ?>

   
    <!-- end header section -->
  </div>

  <!-- profile section -->


  <div class="page-wrapper">
            <div class="content">
                <div class="row">
                    <div class="col-lg-8 offset-lg-1">
                        <h2 class="page-title">Edit Patient</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-8 offset-lg-1">
                        <form method="POST" action="#" enctype="multipart/form-data">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Patient Name <span class="text-danger">*</span></label>
                                        <input class="form-control" type="text" value="<?php echo $row[1];?>" name="Name">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Joined Date</label>
                                        <input class="form-control" type="text" value="<?php echo $row[10];?>" disabled>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Patient ID <span class="text-danger">*</span></label>
                                        <input class="form-control" type="text" value="<?php echo $row[9];?>" disabled>
                                    </div>
                                </div>

                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Patient Age</label>
                                        <input class="form-control" type="text" value="<?php echo $row[2];?>" name="Age">
                                    </div>
                                </div>


                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Address</label>
                                        <input class="form-control" type="text" value="<?php echo $row[3];?>" name="address">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Email <span class="text-danger">*</span></label>
                                        <input class="form-control" type="email" value="<?php echo $row[5];?>" name="Email">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Password</label>
                                        <input class="form-control" value=<?php echo $row[8];?> type="password" name="Password">
                                    </div>
                                </div>
                 
								<div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Date of Birth</label>
                                        <div class="cal-icon">
                                            <input type="text" class="form-control datetimepicker" value="<?php echo $row[11];?>" name="birthday">
                                        </div>
                                    </div>
                                </div>
								<div class="col-sm-12">
									<div class="row">
										<div class="col-sm-6 col-md-6 col-lg-3">
											<div class="form-group">
												<label>Disease</label>
                                                <input type="text" class="form-control" value="<?php echo $row[12];?>" disabled>
											
											</div>
										</div>
										<div class="col-sm-6 col-md-6 col-lg-3">
											<div class="form-group">
												<label>Disease detail/cause</label>
												<input type="text" class="form-control" value="<?php echo $row[13];?>" disabled>
											</div>
										</div>
                                        <div class="col-sm-6 col-md-6 col-lg-3">
											<div class="form-group">
												<label>Any other Problem</label>
                                                <input type="text" class="form-control" value="<?php echo $row[14];?>" disabled>
											
											</div>
										</div>
										<div class="col-sm-6 col-md-6 col-lg-3">
											<div class="form-group">
												<label>Detail/cause</label>
												<input type="text" class="form-control" value="<?php echo $row[15];?>" disabled>
											</div>
										</div>
                                      <div class="col-sm-6 col-md-6 col-lg-3">
											<div class="form-group">
												<label>Country</label>
                                                <input type="text" class="form-control" value="<?php echo $row[17];?>" name="country">
											
											</div>
										</div>
										<div class="col-sm-6 col-md-6 col-lg-3">
											<div class="form-group">
												<label>City</label>
												<input type="text" class="form-control" value="<?php echo $row[16];?>" name="city">
											</div>
										</div>
                                        <div class="col-sm-6">
									<div class="form-group gender-select" value="<?php echo $row[6];?>" name="Gender">
										<label class="gen-label">Gender:</label>
										<div class="form-check-inline">
											<label class="form-check-label">
												<input type="radio" name="gender" class="form-check-input" checked>Male
											</label>
										</div>
										<div class="form-check-inline">
											<label class="form-check-label">
												<input type="radio" name="gender" class="form-check-input">Female
											</label>
										</div>
									</div>
                                </div>
					
									</div>
								</div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Phone </label>
                                        <input class="form-control" type="text" value="<?php echo $row[4];?>" name="Phone_Number">
                                    </div>
                                </div>
                                <div class="col-sm-6">
									<div class="form-group">
										<label>Avatar</label>
										<div class="profile-upload">
											<div class="upload-img">
												<img alt="" src="./profile/<?php echo $row[7];?>" name="Profilename">
											</div>
											<div class="upload-input">
												<input type="file" class="form-control">
											</div>
										</div>
									</div>
                                </div>
                            </div>

                            <span style="color:red;">*Details regarding health can only be edited/updated by your Doctor*</span>
                          
                            <div class="m-t-20 text-center">
                                <button type="submit" name="submit" class="btn btn-primary submit-btn">Save</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

   </div>




  
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


  
<?php

}
}

if(isset($_POST["submit"])){



    $Name =  $_POST["Name"];
    $Email =  $_POST["Email"];
    $Password =  $_POST["Password"];
    $Age =  $_POST["Age"];
    $address =  $_POST["address"];
    $Phone_Number =  $_POST["Phone_Number"];
    $Gender =  $_POST["Gender"];
    $Patient_id	 =  $_POST["Patient_id	"];
    $year_joined =  $_POST["year_joined"];
    $birthday =  $_POST["birthday"];
    $Disease =  $_POST["Disease"];
    $disease_detail =  $_POST["disease_detail"];
    $disease_2 =  $_POST["disease_2"];
    $disease2_detail =  $_POST["disease2_detail"];
    $city =  $_POST["city"];
    $country =  $_POST["country"];

    
    $Profilename =  $_FILES["Profile"]["name"];
    $profile_tmp = $_FILES["Profile"]["tmp_name"];
    $path = './Profiles/' . $Profilename ;

    move_uploaded_file($profile_tmp , $path);
  

    $update="UPDATE `patients` SET `Name`='$Name',`Email`='$Email',`Password`='$Password',`Age`='$Age'  ,`address`='$address' ,`Phone_Number`='$Phone_Number'  ,`Gender`='$Gender' ,`year_joined`='$year_joined'  ,`birthday`='$birthday'  ,`city`='$city'  ,`country`='$country' `Photo`='$Profilename'  WHERE id = $id";

    $fetchupdate = mysqli_query($connect , $update);

    header("Location: index.php");

}



?>



</body>

</html>