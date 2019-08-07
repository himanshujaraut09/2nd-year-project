

<?php
  // Create database connection
  $con=mysqli_connect("localhost","root","","house");



if (isset($_POST['submit'])) {
  	
$house_name = mysqli_real_escape_string($con, $_POST['house_name']);
$room_set = mysqli_real_escape_string($con, $_POST['room_set']);
$monthly_rent = mysqli_real_escape_string($con, $_POST['monthly_rent']);
$contact = mysqli_real_escape_string($con, $_POST['contact']);
$address = mysqli_real_escape_string($con, $_POST['address']);
$landmark = mysqli_real_escape_string($con, $_POST['landmark']);
$hno = mysqli_real_escape_string($con, $_POST['hno']);

// Get image name
  	$image = $_FILES['image']['name'];
  
  	// image file directory
  	$target = "../images/".basename($image);

  	$sql = "INSERT INTO ghar (house_name,room_set,monthly_rent,contact,address,landmark,hno,image) VALUES ('$house_name','$room_set','$monthly_rent','$contact','$address','$landmark','$hno','$image')";
  	// execute query
  	mysqli_query($con, $sql);

  	if (move_uploaded_file($_FILES['image']['name'], $target)) {
  		echo "<h1 color='red'>".'House Registered Successfully!'."</h1>";

  	}
	else{
  		echo "<h1 color='red'>".'NOT Registered !'."</h1>";

  	}
  }

  $result = mysqli_query($con, "SELECT * FROM ghar");


?>


 <?php

if(isset($_POST['submit']))

{  
  while ($row = mysqli_fetch_array($result)) {
      echo "<div id='img_div'>";
      	echo "<img src='images/".$row['image']."' >";
      echo "</div>";
 
   }
}
  ?>
