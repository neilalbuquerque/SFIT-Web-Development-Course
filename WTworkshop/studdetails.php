<?php
$n1=$_POST["rollno"];
$n2=$_POST["fname"];
$n3=$_POST["lname"];
 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "wdworkshop";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$sql = "insert into  student (rollno, firstname, lastname)
values ('$n1', '$n2', '$n3')";

if (mysqli_query($conn, $sql)) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>




