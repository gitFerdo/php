<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $array1 = array("Kevin", true, "Arial", "Alice", 1, "Bob");
    $array2 = array("Kevin", "Arial", "Alice", "Bob");

    echo $array2[1];

    $array1[1] = "John";
    echo $array1[1]; 

    echo count($array1); 
    ?>
</body>
</html>