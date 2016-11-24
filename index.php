<?php 
    include("connect.php");

    try {
        $result = $db->query("SELECT * FROM books ORDER BY id DESC");
        // echo "retrieved results";
    } catch (Exception $e) {
        echo "Unable to retrieve books, error in db.";
        exit;
    }

// var_dump($results->fetchAll(PDO::FETCH_ASSOC));
?>
<html lang="en">
    <head>
        <title>Book Inventory</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="style.css" rel="stylesheet">
    </head>
    <body>
        <h1>Book Inventory</h1>
        <h2><a href="add.php">Add new book</a></h2>
        <div>
            <table>
                <thead>
                    <th>Title</th>
                    <th>Author</th>
                    <th>Year</th>
                </thead>
                <tbody>
                    <?php 	
                    while($row = $result->fetch(PDO::FETCH_ASSOC)) { 		
                        echo "<tr>";
                        echo "<td>".$row['title']."</td>";
                        echo "<td>".$row['author']."</td>";
                        echo "<td>".$row['year']."</td>";	
                        echo "<td><a href=\"edit.php?id=$row[id]\"> Edit </a></td>";
                        echo "<td><a href=\"delete.php?id=$row[id]\" onClick=\"return confirm('Are you sure you want to delete this book?')\">Delete</a></td>";
                    }
                    ?>
                </tbody>
            </table>
        <div>
    </body>
</html>