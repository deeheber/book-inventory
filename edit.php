<?php 
    include("connect.php");

    if(isset($_POST['update'])) {
        $id = $_POST['id'];
        $title = $_POST['title'];
        $author = $_POST['author'];
        $year = $_POST['year'];
            
        if(empty($title) || empty($author) || empty($year)) {
            if(empty($title)) {
                echo "<p style='color:#FFC107;'>Title is required</p>";
            }

            if(empty($author)) {
                echo "<p style='color:#FFC107;'>Author is required</p>";
            }

            if(empty($year)) {
                echo "<p style='color:#FFC107;'>Year is required</p>";
            }
            
        } else { 

            $result = mysqli_query($mysqli, "UPDATE books SET title='$title',author='$author',year='$year' WHERE id=$id");
            echo "<p style='color:lime'>Data successfully updated!</p>";
            // figure out a way to redirect this to the index.php page on successful submit
            header("Location: index.php");
        }
    } 
?>

<?php
    // get current book info to display in the initial input values
    $id = $_GET['id'];
    $result = mysqli_query($mysqli, "SELECT * FROM books WHERE id=$id");

    while($res = mysqli_fetch_array($result)){
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
                <input type="hidden" name="id" value=<?php echo $_GET['id'];?>>
                <button type="submit" name="update" value="update">Submit</button>
            </form>
        <p><a href="index.php">View Books</a></p>
        </div>
    </body>
</html>