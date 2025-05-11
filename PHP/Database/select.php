<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Select </title>
</head>
<body>

<?php
$servername = "localhost";
$username = "root";
$password = "root@2004";
$dbname = "connection";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}


$sql_select = "SELECT * FROM Student";
$result = mysqli_query($conn, $sql_select);

if (mysqli_num_rows($result) > 0) {
  
  while ($row = mysqli_fetch_assoc($result)) {
    echo  " name : ". $row["name"];
    
    echo  " , roll_no : ". $row["roll_no"];
    echo "<br>";
  }
} else {
  echo "0 results";
}

?>    
</body>
</html>
