<?php 
    include("connect.php");
    $data = mysqli_query($mysqli, "SELECT * FROM books ORDER BY id DESC");
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
                    while($result = mysqli_fetch_array($data)) { 		
                        echo "<tr>";
                        echo "<td>".$result['title']."</td>";
                        echo "<td>".$result['author']."</td>";
                        echo "<td>".$result['year']."</td>";	
                        echo "<td><a class=\"btn\" href=\"#\">Edit</a> ";
                        echo "<a class=\"btn\" href=\"#\">Delete</a></td>";
                    }
                    ?>
                </tbody>
            </table>
        <div>
    </body>
</html>