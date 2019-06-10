<?php

  include_once('connection.php');

  $tableQuery = "CREATE TABLE table_1(
               number int NOT NULL AUTO_INCREMENT,
               name varchar(50),
               age int,
               gender varchar(10),
               PRIMARY KEY(number)
            )" ;

  $tableQuerySuccess = mysqli_query($connection , $tableQuery);

  if($tableQuerySuccess){
    echo "<p>create table successful</p>";
  }else{
    echo "<p>create table Unsuccessful</p>";
  }


?>