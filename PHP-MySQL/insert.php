<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "product_catalog";
$id=$_POST["product_id"];
$n=$_POST["product_name"];
$p=$_POST["product_price"];
$d=$_POST["product_description"];
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$sql = "insert into  product_details (product_id, product_name, product_price, product_description)
values ('$id', '$n', '$p', '$d')";

if (mysqli_query($conn, $sql)) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>