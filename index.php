<?php 
    include("connect.php");
    $result = mysqli_query($mysqli, "SELECT * FROM books ORDER BY id DESC");
?>
<html>
    <head>
        <title>Book Inventory</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="style.css" rel="stylesheet">
    </head>
    <body>
        <h1>Book Inventory</h1>
        <p><a href="add.php">Add new book</a></p>
        <div>
            <table>
                <thead>
                    <th>Title</th>
                    <th>Author</th>
                    <th>Year</th>
                </thead>
                <tbody>
                    <?php 
                    while($row = mysqli_fetch_array($result)) { 		
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