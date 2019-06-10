<!DOCTYPE html>
<html lang="en">
<head></head>
<body>
  <?php
    
    function userFunction_1(){  // without arguments
      echo "I'm a function <br>";
    }

    function userFunction_2($name , $age){  // with arguments
      echo "{$name}'s age is {$age} <br>";
    }

    function userFunction_3($name = "priyashan" , $age = 25 ){
      echo "{$name}'s age is {$age} <br>";   //with default valued arguments
    }

    userFunction_1();

    echo "<br>";

    userFunction_2("priyashan" , 25);

    echo "<br>";
    
    userFunction_3();
    userFunction_3("kamal");
    userFunction_3("sadun" , 72);

    
    $global_varialble = "Im a global variable";
    
    function printing(){

      //echo $global_varialble;  // cant use global variables normally inside the functions like this 

      global $global_varialble;  // it need to define like this 

      echo $global_varialble;    // then you van use the global variables

    }

    printing();

  ?>
</body>
</html>