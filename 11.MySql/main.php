<!DOCTYPE html>
<html lang="en">
<head></head>
<body>

  <?php
   
    include('connection.php');
    include('create-table.php');
    include('insert-data.php');
    include('read-data.php');

    $data_1 = mysqli_fetch_assoc($readQuerySuccess);
    $data_2 = mysqli_fetch_assoc($readQuerySuccess);
    
    echo "<pre>";
      print_r($data_1);
    echo "</pre>";

    echo "<pre>";
      print_r($data_2);
    echo "</pre>";

  ?>
  
</body>
</html>