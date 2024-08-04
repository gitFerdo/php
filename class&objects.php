<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        // Create Class
        class Book {
            var $title;
            var $author;
            var $pages;

            // Create Constructor
            function __construct($aTitle, $aAuthor, $aPages){
                echo "New Book <br>";

                $this -> title = $aTitle;
                $this -> author = $aAuthor;
                $this -> pages = $aPages;
            }
        }

        $book1 = new Book("Harry Potter", "JK Rowling", 500);
        $book1 -> title = "Book";

        $book2 = new Book("Lord of the Rings", "Tolkien", 800);

        echo $book1 -> title;

        class Student {
            var $name;
            var $major;
            var $gpa;

            function __construct($name, $major, $gpa) {
                $this -> name = $name;
                $this -> major = $major;
                $this -> gpa = $gpa;
            }

            // Object Functions
            function hasHonors() {
                if($this -> gpa >= 3.5){
                    return "true";
                }

                return "false";
            }
        }

        $student1 = new Student("John","Business", 2.5);
        $student2 = new Student("Tim","Art", 3.8);

        echo $student2 -> hasHonors();

        class Movie {
            public $title;
            private $rating;

            function __construct($title, $rating){
                $this -> title = $title;
                $this -> setRating($rating);
            }

            function getRating(){
                return $this -> rating;
            }

            function setRating($rating){
                if($rating == "G" || $rating == "G2"){
                    $this -> rating = $rating;
                } else {
                    $this -> rating = "NR";
                }
            }
        }

        $avengers = new Movie("Avengers", "PG-13");

        echo $avengers -> getRating();

        $avengers -> setRating("G");
        echo $avengers -> getRating();
    ?>
</body>
</html>