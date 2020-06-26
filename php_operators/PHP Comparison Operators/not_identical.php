<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>	Not identical</title>
</head>
<body>
    <?php
    $x = 100;
    $y = "100";
    var_dump($x !== $y) // returns true because types are not equal
    ?>
</body>
</html>