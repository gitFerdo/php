<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="calculator.php" method="get">
        <input type="number" name="num1">
        <br>
        
        <input type="number" name="num2">
        <br>

        <input type="submit">
        <br>
    </form>

    Num 1: <?php echo $_GET["num1"] ?>
    <br>

    Num 2: <?php echo $_GET["num2"] ?>
    <br> <br>

    Answer: <?php echo $_GET["num1"] + $_GET["num2"] ?>
</body>
</html>