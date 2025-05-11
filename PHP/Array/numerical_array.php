<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Numerical_array</title>
</head>
<body>
    
<?php

$colors = array("Red", "Green", "Blue", "Yellow");


echo "<h3>List of Colors (using for loop):</h3>";
for ($i = 0; $i < count($colors); $i++) {
    echo "Color at index $i is: " . $colors[$i] . "<br>";
}


echo "<br><h3>List of Colors (using foreach loop):</h3>";
foreach ($colors as $index => $value) {
    echo "Index $index => $value <br>";
}


echo "<br><h4>Accessing specific element:</h4>";
echo "Color at index 2 is: " . $colors[2];  
?>


</body>
</html>