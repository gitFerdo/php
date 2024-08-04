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
     <br><br><br>

     <!-- Comparison (>=) -->
     <?php
      function getMax($num1, $num2, $num3) {
         if($num1 >= $num2 && $num1 >= $num3){
            return $num1;
         } elseif($num2 >= $num1 && $num2 >= $num3) {
            return $num2;
         } else {
            return $num3;
         }
      }

      echo getMax(2, 5, 10);
     ?>
     <br><br><br>

     <!-- switch statement -->
      <form action="functions.php" method="post">
         What was your grade? <input type="text" name="grade">

         <input type="submit">
      </form>
     
      <?php
      $grade = $_POST["grade"];
      
      switch($grade) {
         case "A":
            echo "Your grade amazing!";
            break;

         case "B":
            echo "Your grade pretty good!";
            break;

         case "C":
            echo "Your grade good!";
            break;

         case "D":
            echo "Your grade very bad!";
            break;

         case "F":
            echo "Your Fail!";
            break;

         default:
            echo "Unknown grade";
      }
      ?>
      <br><br><br>

      <!-- while loops -->
       <?php
       $index = 1;

       while($index <= 5) {
         echo "$index <br>";
         $index++;
       }
       ?>
       <br><br><br>

       <!-- Do While Loop -->
       <?php
       $index = 1;

       do {
         echo "$index <br>";
         $index++;
       } while($index <= 5);
       ?>
       <br><br><br>
       
       <!-- for while loops -->
        <?php
        for($index = 0; $index <= 5; $index++) {
         echo "$index <br>";
        }

        // for loop array
        $array = array(4, 8, 6, 7, 6, 35, 10, 9);

        for($i = 0; $i < count($array); $i++) {
         echo "$array[$i] <br>";
        }
        ?>
</body>

</html>