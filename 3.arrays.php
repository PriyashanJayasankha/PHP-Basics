<!DOCTYPE html>
<html lang="en">
<head></head>
<body>
  <?php

     $x = array(5,10,20,30,40,50);
     echo $x[5];
     
     $x[6] = 200; //add the next item simply with the next index
     $x[] = 500;  //add the next item simply if we dont know the last index
  
     $x[] = "kamal"; //there can be strings and numbers in single array
cfd
     $x[] = array("sadun" , "chamara" , "kamal"); //there can be a another array as a array element
  
  ?>

  <pre>
    <?php 
      print_r($x);
    ?>
  </pre>

</body>
</html>