<html>
    <head>
        <title>Basic php project</title>
    </head>
    <body>
        <?php

         $val=10;

         function add($a,$b){
            global $val;
            print($val);
         }

         add(2,3);

        ?>
    </body>
</html>