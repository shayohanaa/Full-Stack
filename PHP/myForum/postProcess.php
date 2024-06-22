<?php 
session_start();
if(isset($_SESSION['username']))
{
    $username = $_SESSION['username'];
} else {
    echo 'Something went wrong...';
}
include 'Assets/config.php'; 
?>
<?php
    if(isset($_GET['subcategoryId']))
    {
        $subcategoryId = $_GET['subcategoryId'];
    }
?>
<?php
    if(!empty($_POST['title']) && !empty($_POST['description']))
    {
        $title = mysqli_real_escape_string($conn, $_POST['title']);
        $description = mysqli_real_escape_string($conn, $_POST['description']);

        $query = "INSERT INTO posts (subcategory_id, username, title, description, likes) VALUES('$subcategoryId', '$username', '$title', '$description', 0)";

        if(!mysqli_query($conn, $query))
        {
            die(mysqli_error($conn));
        } else {
            header('Location: index.php');
        }
    } else {
        header('Location: createPost.php?error=Please%20fill%20in%20all%20fields.');
        exit;
    }
?>