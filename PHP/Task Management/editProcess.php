<?php include 'Assets/config.php'; ?>
<?php
    if(isset($_GET['taskId']))
    {
        $taskId = $_GET['taskId'];
        if(!empty($_POST['title']) && !empty($_POST['description']))
        {
            $title = mysqli_real_escape_string($conn, $_POST['title']);
            $description = mysqli_real_escape_string($conn, $_POST['description']);

            if(strlen($title) < 5 || strlen($title) > 15)
            {
                header('Location: editTask.php?error=Title%20should%20be%205%20-%2015%20characters.');
                exit;
            }
    
            if(strlen($description) < 15 || strlen($description) > 250)
            {
                header('Location: editTask.php?error=Description%20should%20be%2015%20-%20250%20characters.');
                exit;
            }

            $query = "UPDATE tasks SET title = '$title', description = '$description'";
            $result = mysqli_query($conn, $query);

            header('Location: index.php');
            exit;

        } else {
            header('Location: editTask.php?error=Please%20fill%20in%20all%20fields..');
            exit;
        }
    } else {
        header('Location: editTask.php?error=Something%20went%20wrong,%20Try%20again.');
        exit;
    }
?>