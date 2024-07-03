<?php include 'Assets/config.php'; ?>
<?php
    if(isset($_GET['taskId']))
    {
        $taskId = $_GET['taskId'];
        $query = "SELECT * FROM tasks WHERE id = '$taskId'";
        $result = mysqli_query($conn, $query);
        $rowTask = mysqli_fetch_assoc($result);
        $title = $rowTask['title'];
        $description = $rowTask['description'];
        $createDate = $rowTask['createDate'];
        $archive = "INSERT INTO archive (taskId, title, description, createDate) VALUES('$taskId', '$title', '$description', '$createDate')";
        $archiveResult = mysqli_query($conn, $archive);
        $query = "DELETE FROM tasks WHERE id = '$taskId'";
        $result = mysqli_query($conn, $query);
        header('Location: index.php');
        exit;
    } else {
        header('Location: editTask.php?error=Something%20went%20wrong,%20Try%20again.');
        exit;
    }
?>