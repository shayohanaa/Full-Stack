<?php include 'Assets/config.php'; ?>
<?php
    if(isset($_GET['taskId']))
    {
        $taskId = $_GET['taskId'];
        $query = "DELETE FROM tasks WHERE id = '$taskId'";
        $result = mysqli_query($conn, $query);
        header('Location: index.php');
        exit;
    } else {
        header('Location: editTask.php?error=Something%20went%20wrong,%20Try%20again.');
        exit;
    }
?>