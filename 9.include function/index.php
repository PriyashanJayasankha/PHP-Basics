<!DOCTYPE html>
<html lang="en">
<head></head>
<body>
  
  <?php
    echo "Hello this is a local text";

    include('source.php');

    include('telephone.php');
    displayTP(); // you can use funtions inside the included files

  ?>

</body>
</html>