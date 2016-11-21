<?php
    include("connect.php");
    $id = $_GET['id'];
    $books = mysqli_query($mysqli, "DELETE FROM books WHERE id=$id");
    header("Location:index.php");
?>
