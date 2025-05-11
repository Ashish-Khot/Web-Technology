

<?php

if (isset($_GET['name']) && isset($_GET['mobile'])) {
    $name = htmlspecialchars($_GET['name']); 
    $mobile = htmlspecialchars($_GET['mobile']);

    echo "<h2>GET Form Data Received:</h2>";
    echo "Name: " . $name . "<br>";
    echo "Mobile " . $mobile . "<br>";
} else {
    echo "No form data received.";
}

if (isset($_POST['name']) && isset($_POST['mobile'])) {
    $name = htmlspecialchars($_POST['name']); 
    $mobile = htmlspecialchars($_POST['mobile']);

    echo "<h2>POST  Form Data Received:</h2>";
    echo "Name: " . $name . "<br>";
    echo "Mobile " . $mobile . "<br>";
} else {
    echo "No form data received.";
}





?>
