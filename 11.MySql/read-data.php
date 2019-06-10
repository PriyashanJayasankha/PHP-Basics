<?php

  include_once('connection.php');

  $readQuery = "SELECT * FROM table_1";

  $readQuerySuccess = mysqli_query( $connection , $readQuery);

  if($readQuerySuccess){
    echo "<p>read data successful</p>";
  }else{
    echo "<p>read data Unsuccessful</p>";
  }

?>