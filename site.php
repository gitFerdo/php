<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>

<body>
    <?php
    echo ("Hello, world!");
    echo "echo 1";
    echo 30;
    echo "<h1>echo 2</h1>";
    echo "<hr>";
    echo "<p>echo 3</p>";

    // Variables
    $name = "John";
    $age = 46;

    echo "Name: $name <br>";
    echo "Age: $age <br>";

    $name = "Alice";

    echo "My name is $name <br>";
    echo "My age is $age <br>";

    // Data Types
    $phrase = "string";

    $integerNo = 20;
    $decimalNo = 2.4;

    $isMale = true;

    echo "$phrase <br>";

    // working with string
    $phrase = "Academy";

    echo $phrase;

    echo strtolower($phrase);

    echo strtoupper($phrase);
    echo strtoupper("dog");
    
    echo strlen($phrase);
    
    echo $phrase[1];
    echo "apple"[1];
    
    $phrase[0] = "z";
    echo $phrase;
    
    $phrase = "red apple";
    echo str_replace("red", "blue", $phrase);

    echo substr($phrase, 4);
    echo substr($phrase, 4, 1);

    // Working with Numbers
    echo 4;
    echo 4.8764;
    echo -4;
    echo -4.49;

    echo 4 + 2;
    echo 4 / 2;
    echo 4 * 2;
    echo 10 % 3;
    echo 10 + 3 - 4 * 2;

    $num = 10;
    echo $num;

    $num++;
    echo $num;

    $num--;
    echo $num;

    $num = $num + 5;
    echo $num;

    $num += 5;
    echo $num;

    echo abs(-10); // convert to positive
    echo pow(4, 2);
    echo sqrt(25);

    echo max(25, 2);
    echo min(25, 2);

    echo round(3.1);
    echo ceil(3.1); // always rounds upper
    echo floor(3.2); // always rounds lower 

    ?>
</body>

</html>