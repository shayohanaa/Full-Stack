<?php
include 'Assets/config.php';

    if(isset($_GET['artId']))
    {
        $artId = $_GET['artId'];
        $query = "SELECT * FROM articles WHERE id = '$artId'";
        $results = mysqli_query($conn, $query);
        $row = mysqli_fetch_assoc($results);
        $likes = $row['disliked'];
        $updatedVal = $likes + 1;

        if($results && mysqli_num_rows($results) > 0){
            $update = "UPDATE articles SET disliked = '$updatedVal' WHERE id = '$artId'";
            $updateResult = mysqli_query($conn, $update);
            header('Location: knowledgebase.php');
            exit;
        }
    }