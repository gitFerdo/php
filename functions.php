<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    function sayHi($name, $age)
    {
        echo "Hello, $name. Your age is $age <br>";
    }

    sayHi("John", 23);
    sayHi("Tom", 78);
    sayHi("Adam", 34);
    ?>
    <br><br><br>

    <!-- Return Statement -->
     <?php
     function cube($num){
        return $num * $num * $num;
     }

     echo cube(2);

     $result = cube(3);
     echo $result;
     ?>
     <br><br><br>

     <!-- If Statement -->
     <?php
     $isMale = false;
     $isTall = true;
     
     if($isMale && $isTall){
        echo "You are Male and tall.";
     } elseif($isMale && !$isTall){
        echo "You are Male and short.";
     } elseif(!$isMale && $isTall){
        echo "You are Female and tall.";
     } else{
        echo "You are Female and short.";
     }
     ?>
     
</body>

</html>