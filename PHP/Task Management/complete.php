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
        $completeQuery = "INSERT INTO complete (taskId, title, description, createDate) VALUES('$taskId', '$title', '$description', '$createDate')";
        $completeResult = mysqli_query($conn, $completeQuery);

        $deleteQuery = "DELETE FROM tasks WHERE id = '$taskId'";
        $deleteResult = mysqli_query($conn, $deleteQuery);
        header('Location: index.php');
        exit;
    } else {
        header('Location: index.php?error=Something%20went%20wrong.');
        exit;
    }
?>