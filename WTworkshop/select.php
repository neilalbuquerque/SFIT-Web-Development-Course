<?php
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

$sql = "SELECT * FROM student";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
  // output data of each row
  while($row = mysqli_fetch_array($result)) {
    echo "rollno " . $row["rollno"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]."<br>";
  }

  echo "0 results";
}

mysqli_close($conn);
?>

