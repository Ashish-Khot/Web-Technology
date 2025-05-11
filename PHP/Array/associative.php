<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Associative Array </title>
</head>
<body>
    
<?php

$student = array(
    "name" => "Ashish",
    "age" => 21,
    "Department" => "Computer Science",
    
);


echo "<h3>Student Details:</h3>";
foreach ($student as $key => $value) {
    echo "<b>$key</b>: $value <br>";
}


echo "<br><h4>Accessing specific element:</h4>";
echo "Name of the student is: " . $student["name"];
?>

</body>
</html>