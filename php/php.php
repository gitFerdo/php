<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        // include article
        $title = "Titles";
        $author = "John";
        $wordCount = 400;

        include "artical-header.php";

        // include useful-tools.php
        include "useful-tools.php";

        sayHi("John");
        echo $feetInMile;
    ?>
</body>
</html>