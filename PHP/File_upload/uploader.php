<html>
    <?php
       
      //  $target="D:\Upload\\";
      $target="C:\Users\Admin\Desktop\\1";
       if(move_uploaded_file($_FILES['fileToUpload']['tmp_name'],$target.$_FILES['fileToUpload']['name'])){
         echo "File uploaded successfully";
       }
       else{
            echo "File upload failed";
       }

    ?>

</html>
