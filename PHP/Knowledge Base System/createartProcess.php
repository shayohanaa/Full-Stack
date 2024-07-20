<?php
session_start();
include 'Assets/config.php';

    if(isset($_SESSION['username']))
    {
        $username = $_SESSION['username'];
        if(!empty($_POST['title']) && !empty($_POST['artText']))
        {
            $title = mysqli_real_escape_string($conn, $_POST['title']);
            $artText = mysqli_real_escape_string($conn, $_POST['artText']);

            if(strlen($title) > 35)
            {
                header('Location: createArticle.php?artId='. $artId . '&error=Title%20should%20be%20up%20to%2035%20characters.');
                exit;
            }
    
            if(strlen($artText) < 15 || strlen($artText) > 1500)
            {
                header('Location: createArticle.php?artId='. $artId . '&error=Article%20content%20should%20be%2015%20-%201500%20characters.');
                exit;
            }
    
            $query = "INSERT INTO articles (username, title, arttext, liked, disliked) VALUES('$username', '$title', '$artText', 0, 0)";
            if(!mysqli_query($conn, $query))
            {
                die(mysqli_error($conn));
            } else {
                header('Location: knowledgebase.php?success=Article%20submitted.');
                exit;
            }
    
        } else {
            header('Location: createArticle.php?artId='. $artId . '&error=Please%20fill%20both%20fields.');
            exit;
        }
    } else {
        header('Location: login.php');
        exit;
    }

?>