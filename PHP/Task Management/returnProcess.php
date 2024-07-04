<?php include 'Assets/config.php'; ?>
<?php
    if(isset($_GET['taskId']))
    {
        $taskId = $_GET['taskId'];
        $query = "SELECT * FROM archive WHERE taskId = '$taskId'";
        $result = mysqli_query($conn, $query);
        $rowTask = mysqli_fetch_assoc($result);
        $title = $rowTask['title'];
        $description = $rowTask['description'];
        $createDate = $rowTask['createDate'];
        $return = "INSERT INTO tasks (id, title, description, createDate) VALUES('$taskId', '$title', '$description', '$createDate')";
        $returnResult = mysqli_query($conn, $return);
        $query = "DELETE FROM archive WHERE taskId = '$taskId'";
        $result = mysqli_query($conn, $query);
        header('Location: index.php');
        exit;
    } else {
        header('Location: archived.php?error=Something%20went%20wrong,%20Try%20again.');
        exit;
    }
?>