<?php
session_start();
include 'assets/config.php'; // Ensure this file contains your database connection

if (!empty($_POST['username']) && !empty($_POST['pass'])) {
    $username_or_email = mysqli_real_escape_string($conn, $_POST['username']);
    $pass = mysqli_real_escape_string($conn, $_POST['pass']);

    // Check if the input is an email or username
    if (filter_var($username_or_email, FILTER_VALIDATE_EMAIL)) {
        $query = "SELECT * FROM accounts WHERE email = '$username_or_email'";
    } else {
        $query = "SELECT * FROM accounts WHERE username = '$username_or_email'";
    }

    $result = mysqli_query($conn, $query);
    if ($result && mysqli_num_rows($result) > 0) {
        $user = mysqli_fetch_assoc($result);

        // Verify password
        $userpass = $user['pass'];
        if (password_verify($pass, $user['pass'])) 
        {
            // Set session variables
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['username'] = $user['username'];
            $_SESSION['email'] = $user['email'];
            header('Location: index.php?success=Login%20successful.');
            exit();
        } else {
            // header('Location: account.php?error=Incorrect%20password.');
            echo $userpass;
            exit();
        }
    } else {
        header('Location: account.php?error=User%20not%20found.');
        exit();
    }
} else {
    header('Location: account.php?error=Please%20fill%20out%20all%20fields.');
    exit();
}
?>