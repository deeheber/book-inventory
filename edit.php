<?php 
    include("connect.php");

    if(isset($_POST['update'])) {
        $id = $_POST['id'];
        $title = $_POST['title'];
        $author = $_POST['author'];
        $year = $_POST['year'];
            
        if(empty($title) || empty($author) || empty($year)) {
            if(empty($title)) {
                $noTitle = true;
            }

            if(empty($author)) {
                $noAuthor = true;
            }

            if(empty($year)) {
                $noYear = true;
            }
            
        } else { 

            try {
                $result = $db->query("UPDATE books SET title='$title',author='$author',year='$year' WHERE id=$id");
            } catch (Exception $e) {
                echo "Unable to update book, error in db.";
                exit;
            }
       
            // redirect to index on successful update
            header("Location: index.php");
        }
    } 
?>

<?php
    // get current book info to display in the initial input values
    try {
        $id = $_GET['id'];
        $result = $db->query("SELECT * FROM books WHERE id=$id");
    } catch (Exception $e) {
        echo "Unable to retrieve item, error in the db.";
        exit;
    }

    while($res = $result->fetch(PDO::FETCH_BOTH)){
        $title = $res['title'];
        $author = $res['author'];
        $year = $res['year'];
    }
?>
<html>
    <head>
        <title>Edit Book</title>
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
                <button type="submit" name="update" value="Update">Submit</button>
            </form>
            <!--Error messages for empty fields-->
                <?php if($noTitle){echo "<p style='color:#FFC107;'>Title is required</p>";} ?>
                <?php if($noAuthor){echo "<p style='color:#FFC107;'>Author is required</p>";} ?>
                <?php if($noYear){echo "<p style='color:#FFC107;'>Year is required</p>";} ?>
            <p><a href="index.php">View Books</a></p>
        </div>
    </body>
</html>