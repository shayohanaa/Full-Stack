<?php
include 'Assets/config.php';

    if(!empty($_POST['knowledge-search']))
    {
        $searchVal = mysqli_real_escape_string($conn, $_POST['knowledge-search']);

        if(strlen($searchVal) < 5)
        {
            header("Location: knowledgebase.php?error=Write%20at-least%205%20characters.");
            exit;
        } else {
            header("Location: knowledgebase.php?searchKey=$searchVal");
            exit;
        }

    } else {
        header('Location: knowledgebase.php?error=Please%20fill%20the%20search%20field.');
        exit;
    }
?>