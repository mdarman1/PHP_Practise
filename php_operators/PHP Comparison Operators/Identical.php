<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Identical</title>
</head>
<body>
    <?php
    $x = 100;
    $y = "100";
    var_dump($x === $y); // returns false because types are not equal
    ?>
</body>
</html>