<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        
      
        $name="Ashish";

        function myname(){
            
            global $name;
            echo "my name is $name";
            print($name."is chingus"."<br>");
            print("Hello");
        }

        print($name."is Chingus");
    ?>
</body>
</html>