<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- GET -->
    <form action="url.php" method="get">
        Password: <input type="password" name="password"> <br>

        <input type="submit">
    </form>
    <br> <br>

    <?php
    echo $_GET["password"];
    ?>

    <br> <br>
   
   <!-- POST -->
    <form action="url.php" method="post">
        Password: <input type="password" name="password"> <br>

        <input type="submit">
    </form>
    <br> <br>

    <?php
    echo $_POST["password"];
    ?>
</body>
</html>