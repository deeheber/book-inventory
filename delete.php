<?php
    include("connect.php");
    
    try {
        $id = $_GET['id'];
        $result = $db->query("DELETE FROM books WHERE id=$id");
    } catch (Exception $e) {
        echo "Unable to delete book, error in the db.";
        exit;
    }

    header("Location:index.php");
?>
