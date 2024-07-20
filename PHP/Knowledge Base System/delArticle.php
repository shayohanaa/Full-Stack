<?php
include 'Assets/config.php';

    if(isset($_GET['artId']))
    {
        $artId = $_GET['artId'];
        $query = "DELETE FROM articles WHERE id = '$artId'";
        $result = mysqli_query($conn, $query);
        header('Location: knowledgebase.php');
        exit;
    }
?>