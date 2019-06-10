<!DOCTYPE html>
<html lang="en">
<head></head>
<body>
  <?php
    
    $x = array("saman" , "faker" , "kamal");
    foreach( $x as $temp ){
      echo $temp . "<br>";     // using with normal array
    }

    echo "<br>";

    $y = array("name"=>"Priyashan" , "age"=>25 , "address"=>"117/1,welandagoda,kirama");
    foreach( $y as $lable=>$data ){
      echo $lable . ":-" . $data . "<br>"; // using with associative array
    }

  ?>
</body>
</html>