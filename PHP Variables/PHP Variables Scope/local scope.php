<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Local scope</title>
</head>
<body>
   <?php
     function myTest(){
    $x = 5; // local scope
    
    echo "<p> Variavle x inside function is: $x </p>";
    }
    myTest();
    //using x outside the function will generate an error
      
    echo "<p> Variavle x outside function is: $x </p>";
    ?>
    
</body>
</html>