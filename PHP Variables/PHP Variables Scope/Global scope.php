<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Global scope</title>
</head>
<body>
    <?php
    $x =5; //Global scope
    function myTest(){
        // using x inside this function will generate an error
        echo "<p> Variable x inside function is: $x</p>";
    }
    myTest();
      echo "<p> Variable x inside function is: $x</p>";
    ?>
</body>
</html>