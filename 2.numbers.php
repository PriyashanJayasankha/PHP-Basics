<!DOCTYPE html>
<html lang="en">
<head></head>
<body>
  
  <?php
  
    $num_1 = 1 ;
    $num_2 = 45.2;
    $num_3 = "vhvbh";
  
    if( is_int($num_1) ){ // check is that a integer
      echo " Integer ";
    }
    else if( is_float($num_1) ){ // check is that a float
      echo " Float ";
    }
    else{
      echo "Not a number";
    }
  
    ?>
  
</body>
</html>