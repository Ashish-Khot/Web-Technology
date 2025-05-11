<?php
$servername = "localhost";
$username = "root";
$password = "root@2004";
$dbname = "connection";


$conn = mysqli_connect($servername, $username, $password, $dbname);


if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$sql ="INSERT INTO Student (name,roll_no) VALUES ('Sagar',45)";

if (mysqli_query($conn, $sql)) {
  echo "New record created successfully";
} else {
  echo "Error: " . mysqli_error($conn);
}

mysqli_close($conn);
?>
