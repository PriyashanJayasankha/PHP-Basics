<?php
  
  include_once('connection.php');

  $insertQuery = "INSERT INTO table_1( name , age , gender )
                              VALUES( 'priyashan jayasankha' , 25 , 'male')";

  $insertQuerySuccess = mysqli_query($connection , $insertQuery);

  if($insertQuerySuccess){
    echo "<p>insert data successful</p>";
  }else{
    echo "<p>insert data Unsuccessful</p>";
  }

?>