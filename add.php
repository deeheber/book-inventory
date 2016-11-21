<?php
    include("connect.php");
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Add Book</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="style.css" rel="stylesheet">
    </head>
    <body>
        <h1>Book Inventory</h1>
        <div>
            <form method="post">
                <h2>Add New Book</h2>
                Title
                    </br>
                <input type="text" name="title"/>
                    </br>
                Author
                    </br>
                <input type="text" name="author"/>
                    </br>
                Year
                    </br>
                <input type="number" name="year"/>
                    </br>
                <button type="submit" name="Submit">Submit</button>
            </form>
        <?php 
        if(isset($_POST['Submit'])) {	
            $title = $_POST['title'];
            $author = $_POST['author'];
            $year = $_POST['year'];
                
            // form validation --- no empty fields
            if(empty($title) || empty($author) || empty($year)) {
                        
                if(empty($title)) {
                    echo "<font color='#FFC107'>Title is required</font><br/>";
                }
                
                if(empty($author)) {
                    echo "<font color='#FFC107'>Author is required</font><br/>";
                }
                
                if(empty($year)) {
                    echo "<font color='#FFC107'>Year is required</font><br/>";
                }
                
            } else { 

                $result = mysqli_query($mysqli, "INSERT INTO books(title, author, year) VALUES('$title','$author','$year')");
                
                echo "<font color='lime'>Book added successfully!";
            }
        } 
        ?>
        <p><a href="index.php">View Books</a></p>
        </div>
    </body>
</html>