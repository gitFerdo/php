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

    <!-- Checkboxes -->

    <form action="form.php" method="post">
        Apples: <input type="checkbox" name="fruits[]" value="apples"> <br>
        Oranges: <input type="checkbox" name="fruits[]" value="oranges"> <br>
        Banana: <input type="checkbox" name="fruits[]" value="banana"><br>

        <input type="submit">
    </form>

    <br>

    Fruits: <?php 
    $fruits = $_POST["fruits"];

    echo $fruits[0];
    ?>
    <br> <br> <br>

    <!-- Associative Array -->
     <form action="array.php" method="post">
        <input type="text" name="student"> <br>

        <input type="submit">
     </form>

     <?php
     $grades = array("Jim" => "A+", "Jane" => "B-", "John" => "C+");

     echo $grades["Jim"];

     $grades["Jim"] = "F";
     echo $grades["Jim"];

     echo $grades[$_POST["student"]];
     ?>
</body>
</html>