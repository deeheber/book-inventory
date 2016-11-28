<?php
    include("connect.php");
    
    try {
        $id = $_GET['id'];
        $result = $db->query("DELETE FROM books WHERE id=$id");
    } catch (Exception $e) {
        echo "Unable to delete book, error in db. </br>";
        echo "Error: ".$e->getMessage()."</br>";
        exit;
    }

    header("Location:index.php");
?>
