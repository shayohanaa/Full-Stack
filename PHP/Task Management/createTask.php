<?php include 'Assets/config.php'; ?>
<?php
    if(!empty($_POST['title']) && !empty($_POST['description']))
    {
        $title = mysqli_real_escape_string($conn, $_POST['title']);
        $description = mysqli_real_escape_string($conn, $_POST['description']);

        if(strlen($title) < 5 || strlen($title) > 15)
        {
            header('Location: index.php?error=Title%20should%20be%205%20-%2015%20characters.');
            exit;
        }

        if(strlen($description) < 15 || strlen($description) > 250)
        {
            header('Location: index.php?error=Description%20should%20be%2015%20-%20250%20characters.');
            exit;
        }

        $query = "INSERT INTO tasks (title, description) VALUES('$title', '$description')";
        $result = mysqli_query($conn, $query);
        header('Location: index.php');
        exit;

    } else {
        header('Location: index.php?error=Please%20fill%20everything.');
        exit;
    }
?>