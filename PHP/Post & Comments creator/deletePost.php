<?php include 'db.php'; ?>

<?php
    $deletepostID = mysqli_real_escape_string($conn, $_GET['deletepostID']);
    $sql = "DELETE FROM posts WHERE id = '$deletepostID'";
    $sqldeletecomments = "DELETE FROM comments WHERE postID = '$deletepostID'";
    $query = mysqli_query($conn, $sql);
    $query1 = mysqli_query($conn, $sqldeletecomments);

    if(!$query && $query1)
    {
        die(mysqli_error($conn));
    } else {
        header('Location: index.php');
    }
?>