<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>	Spaceship</title>
</head>
<body>
   <?php
    $x = 5;
    $y  = 10;
    echo ($x <=> $y); // returns -1 because $x is less than $y
    echo "<br>";
    
    $x = 10;
    $y = 10;
    echo ($x <=> $y); // returns 0 because values are equal
    echo "<br>";
    
    $x = 15;
    $y  = 10;
    echo ($x <=> $y); // returns 1 because $x is greater than $y
    echo "<br>";
    
    ?> 
    
   
</body>
</html>