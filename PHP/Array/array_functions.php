<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array Functions</title>
</head>
<body>

<?php

$fruits = array("Apple", "Banana", "Mango", "Orange");


echo "<h3>1. Count of fruits: </h3>";
echo count($fruits);  


echo "<h3>2. Keys of fruits array:</h3>";
print_r(array_keys($fruits));  


echo "<h3>3. Values of fruits array:</h3>";
print_r(array_values($fruits));  


echo "<h3>4. Check if 'Mango' is in fruits array:</h3>";
if (in_array("Mango", $fruits)) {
    echo "Yes, Mango is present.";
} else {
    echo "Mango is not present.";
}


echo "<h3>5. Adding 'Grapes' and 'Pineapple' to fruits array:</h3>";
array_push($fruits, "Grapes", "Pineapple");
print_r($fruits);  
?>

    
</body>
</html>