<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Constants are Global</title>
</head>
<body>
    <?php
    define("GREETING", "Welcome to W3schools.com!");
    function myTest(){
        echo GREETING;
    }
    myTest();
    ?>
</body>
</html>