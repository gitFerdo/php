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

    <!-- Better Calculator -->
     <form action="calculator.php" method="post">
        First No: <input type="number" step="0.1" name="num1"> <br>
        OP: <input type="textbox" name="op"> <br>
        Second No: <input type="number" step="0.1" name="num2"> <br>
        
        <input type="submit">
     </form>
     <br><br>

     Answer: <?php
        $num1 = $_POST["num1"];
        $num2 = $_POST["num2"];
        $op = $_POST["op"];

        if($op == "+") {
            echo $num1 + $num2;
        } elseif($op == "-") {
            echo $num1 - $num2;
        } elseif($op == "/") {
            echo $num1 / $num2;
        } elseif($op == "*") {
            echo $num1 * $num2;
        } else {
            echo "Invalid Operation";
        }
     ?>
</body>
</html>