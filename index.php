<?php 
    include("connect.php");

    try {
        $result = $db->query("SELECT * FROM books ORDER BY id DESC");
        // echo "retrieved results";
    } catch (Exception $e) {
        echo "Unable to retrieve results";
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
        <h2><a href="add.html">Add new book</a></h2>
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
                        echo "<td><a class=\"btn\" href=\"#\">Edit</a> ";
                        echo "<a class=\"btn\" href=\"#\">Delete</a></td>";
                    }
                    ?>
                </tbody>
            </table>
        <div>
    </body>
</html>