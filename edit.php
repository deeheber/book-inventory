<?php
    include("connect.php");

    // get current book info to display in the initial input values
    $id = $_GET['id'];
    $book = mysqli_query($mysqli, "SELECT * FROM books WHERE id=$id");

    while($res = mysqli_fetch_array($book)){
        $title = $res['title'];
        $author = $res['author'];
        $year = $res['year'];
    }
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Edit Book</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="style.css" rel="stylesheet">
    </head>
    <body>
        <h1>Book Inventory</h1>
        <div>
            <form method="post">
                <h2>Edit Book</h2>
                Title
                    </br>
                <input type="text" name="title" value="<?php echo "$title"; ?>" />
                    </br>
                Author
                    </br>
                <input type="text" name="author" value="<?php echo "$author"; ?>"/>
                    </br>
                Year
                    </br>
                <input type="number" name="year" value="<?php echo "$year"; ?>"/>
                    </br>
                <button type="submit" name="Submit">Submit</button>
            </form>
        <?php 
        if(isset($_POST['Submit'])) {	
            $title = $_POST['title'];
            $author = $_POST['author'];
            $year = $_POST['year'];
                
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

                $book = mysqli_query($mysqli, "UPDATE books SET title='$title',author='$author',year='$year' WHERE id=$id");
                echo "<font color='lime'>Data successfully updated!";
                // figure out a way to redirect this to the index.php page on successful submit
                // header("Location: index.php"); <--- not working
            }
        } 
        ?>
        <p><a href="index.php">View Books</a></p>
        </div>
    </body>
</html>