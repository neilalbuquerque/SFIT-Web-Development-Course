<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "product_catalog";
$x=$_POST['product_id'];
$y=$_POST['product_description'];
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$sql = "update product_details SET product_description ='$y' where product_id='$x'";

if (mysqli_query($conn, $sql)) {
  echo "Record updated successfully";
} else {
  echo "Error updating record: " . mysqli_error($conn);
}

mysqli_close($conn);
?>