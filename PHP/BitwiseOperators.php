<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bitwise Operators</title>
</head>
<body>
   <?php
    $a = 5;  // 0101 
    $b = 3;  // 0011 

    echo "a = $a, b = $b\n";

    // Bitwise AND
     $result = $a & $b;
     echo "Bitwise AND (a & b): $result <br>";  // 0101 & 0011 = 0001 (1)

 // Bitwise OR
    $result = $a | $b;
    echo "Bitwise OR (a | b): $result <br>";   // 0101 | 0011 = 0111 (7)

// Bitwise XOR
   $result = $a ^ $b;
   echo "Bitwise XOR (a ^ b): $result <br>";  // 0101 ^ 0011 = 0110 (6)

  // Bitwise NOT
   $result = ~$a;
   echo "Bitwise NOT (~a): $result <br>";     // ~0101 = ...1010 
  ?>

</body>
</html>