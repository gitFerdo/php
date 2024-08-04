<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="form.php" method="get">
        Name: <input type="text" name="username">
        <br>

        Age: <input type="number" name="age">
        <br> 

        <input type="submit">
    </form>

    <br>

    Name: <?php echo $_GET["username"]; ?>
    <br>
    Age: <?php echo $_GET["age"]; ?>
    <br><br><br>

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
</body>
</html>