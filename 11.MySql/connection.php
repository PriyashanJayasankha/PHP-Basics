<?php
  
  $connection = mysqli_connect('localhost' , 'root' , '' , 'testdb');
  
  if($connection){
    echo "<p>connection successful</p>";
  }

?>