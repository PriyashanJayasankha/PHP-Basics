<?php

  include('connection.php');
  include('create-table.php');
  include('insert-data.php');

  $readQuery = "SELECT * FROM table_1";

  $readQuerySuccess = mysqli_query($connection , $readQuery);
  
  $table = "<table border='1'>";
  while( $data = mysqli_fetch_assoc($readQuerySuccess) ){
    $table .= "<tr>";
    $table .= "<td>{$data['number']}</td>";
    $table .= "<td>{$data['name']}</td>";
    $table .= "<td>{$data['age']}</td>";
    $table .= "<td>{$data['gender']}</td>"; 
    $table .= "</tr>";
  }
  $table .= "</table>";

  echo $table;

?>