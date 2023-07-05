<?php

$connect = mysqli_connect("localhost","root","","hospital");
?>



<?php



if(isset($_POST["query"]))


{
	$search = mysqli_real_escape_string($connect, $_POST["query"]);
	$query = "SELECT * FROM doctors WHERE city LIKE '%$query%';" ;

 $result =   mysqli_query($connect,$query);




}

?>



