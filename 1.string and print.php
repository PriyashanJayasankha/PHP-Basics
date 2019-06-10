<!DOCTYPE html>
<html lang="en">
<head></head>
<body>
    
   <?php

     $firstName = "priyashan";
     $secoundName = "jayasankha";
     
     echo $firstName;
     echo "<br>";
     echo $secoundName;
     echo "<br>";

     echo $firstName . " " . $secoundName; //string concadinating
     echo "<br>";
     
     echo " {$firstName} {$secoundName}"; // double quatation marks working with variables
     echo "<br>";
     echo '{$firstName} {$secoundName}'; // single quatation marks NOT working variables
     
     $fulName = $firstName;
     $fulName .= " ";
     $fulName .= $secoundName;
     echo $fulName;

     echo "<br>";
     echo strtoupper($firstName); // string in uppercase
     echo "<br>";
     echo strtolower($secoundName); // string in lower
     echo "<br>";
     echo ucfirst($firstName); // first letter capital
     echo "<br>";
     echo ucwords($fulName); // first letter capital in every word
     echo "<br>";
     echo strlen($firstName);
     echo "<br>";

     if( strstr($fulName , "priyga") ){  // string searching
       echo "have";
     }else{
       echo "no";
     }

   ?>

</body>
</html>