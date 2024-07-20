<?php
session_start();
include 'Assets/config.php';

if(!empty($_POST['username']) && !empty($_POST['pass'])) {
    $username_or_email = mysqli_real_escape_string($conn, $_POST['username']);
    $pass = mysqli_real_escape_string($conn, $_POST['pass']);

    if(filter_var($username_or_email, FILTER_VALIDATE_EMAIL)) {
        $query = "SELECT * FROM accounts WHERE email = '$username_or_email'";
    } else {
        $query = "SELECT * FROM accounts WHERE username = '$username_or_email'";
    }
    $results = mysqli_query($conn, $query);

    if($results && mysqli_num_rows($results) > 0) {
        $user = mysqli_fetch_assoc($results);
        if(password_verify($pass, $user['password'])) {
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['username'] = $user['username'];
            $_SESSION['email'] = $user['email'];
            header('Location: index.php?LoggedIn');
            exit;
        } else {
            header('Location: login.php?error=Password%20is%20incorrect.');
            exit;
        }
    } else {
        header('Location: login.php?error=User%20not%20found.');
        exit;
    }
} else {
    header('Location: login.php?error=Please%20fill%20in%20all%20fields.');
    exit;
}
?>