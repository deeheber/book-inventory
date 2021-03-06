<?php 
    include("connect.php");

    // get current book info to display in the initial input values
    try {
        $id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
        $sql = "SELECT * FROM books WHERE id=?";
        $result = $db->prepare($sql);
        $result->bindValue(1, $id, PDO::PARAM_INT);
        $result->execute();
    } catch (Exception $e) {
        $message = "<p style='color:#FFC107;'>Error: " . $e->getMessage() . "</p>";
        exit;
    }

    while($res = $result->fetch(PDO::FETCH_BOTH)){
        $title = $res['title'];
        $author = $res['author'];
        $year = $res['year'];
        $id = $res['id'];
    }

    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $title = trim(filter_input(INPUT_POST, 'title', FILTER_SANITIZE_STRING));
        $author = trim(filter_input(INPUT_POST, 'author', FILTER_SANITIZE_STRING));
        $year = trim(filter_input(INPUT_POST, 'year', FILTER_SANITIZE_NUMBER_INT));
        $id = filter_input(INPUT_POST, 'id', FILTER_SANITIZE_NUMBER_INT);
            
        if(empty($title) || empty($author) || empty($year)){
            $message = "<p style='color:#FFC107;'>Please fill out all fields.</p>";
        } else { 

            $sql = "UPDATE books SET title=?,author=?,year=? WHERE id=?";

            try {
                $results = $db->prepare($sql);
                $results->bindValue(1, $title, PDO::PARAM_STR);
                $results->bindValue(2, $author, PDO::PARAM_STR);
                $results->bindValue(3, $year, PDO::PARAM_INT);
                $results->bindValue(4, $id, PDO::PARAM_INT);
                $results->execute();
                header("Location: index.php");
            } catch (Exception $e) {
                $message = "<p style='color:#FFC107;'>Error: " . $e->getMessage() . "</p>";
                exit;
            }
        }
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
                <input type="text" name="title" value="<?php echo $title; ?>" />
                    </br>
                Author
                    </br>
                <input type="text" name="author" value="<?php echo $author; ?>"/>
                    </br>
                Year
                    </br>
                <input type="number" name="year" value="<?php echo $year; ?>"/>
                    </br>
                <input type="hidden" name="id" value=<?php echo $id; ?>>
                <button type="submit">Submit</button>
            </form>
            <!--Error messages for empty fields-->
                <?php if(isset($message)){echo "$message";} ?>
            <p><a href="index.php">View Books</a></p>
        </div>
    </body>
</html>