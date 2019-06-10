<!DOCTYPE html>
<html lang="en">
<head></head>

<body>

  <?php
    
    $x = array(42,24,102,56,74,33);

    echo " Min is: " . min($x); // min function
    echo "<br>";
    echo " Max is: "  . max($x); // max function

  ?>

  <br> <br>
  
  <div style = "border-style:solid">
    normal array :- <pre> <?php print_r($x); ?> </pre>
  </div>
  
  <?php sort($x); ?> <!-- sorting array -->
  
  <div style = "border-style:solid">
    sorted array :- <pre> <?php print_r($x); ?> </pre>
  </div>

  <?php rsort($x); ?> <!-- reverse sorting array -->

  <div style = "border-style:solid"> 
    reverse sorted array :- <pre> <?php print_r($x); ?> </pre>
  </div>

</body>
</html>