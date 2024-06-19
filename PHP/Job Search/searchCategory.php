<?php
include 'Assets/config.php';
    $category = mysqli_real_escape_string($conn, $_POST['category']);
    if($category > 1)
    {
        header("Location: index.php?categoryid=$category");
    } else {
        header('Location: index.php?error=Please%20choose%20category');
    }
?>