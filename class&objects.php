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
        }

        $book1 = new Book;
        $book1 -> title = "Harry Potter";
        $book1 -> author = "JK Rowling";
        $book1 -> pages = 500;

        echo $book1 -> title;
        echo $book1 -> author;
        echo $book1 -> pages;

        $book2 = new Book;
        $book2 -> title = "Lord of the Rings";
        $book2 -> author = "Tolkien";
        $book2 -> pages = 800;
    ?>
</body>
</html>