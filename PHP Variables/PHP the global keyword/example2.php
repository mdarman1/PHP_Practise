<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PHP Global keywords</title>
</head>
<body>
    <?php
    $x =5;
    $y = 10;
    
    function myTest(){
        $GLOBALS['y'] = $GLOBALS['x'] + $GLOBALS['y'];
    }
    myTest();
    echo $y;
    ?>
</body>
</html>