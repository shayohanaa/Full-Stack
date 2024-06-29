<?php
session_start();
include 'assets/config.php'; // Ensure this file contains your database connection

if (!empty($_POST['username']) && !empty($_POST['pass'])) {
    $username_or_email = mysqli_real_escape_string($conn, $_POST['username']);
    $pass = mysqli_real_escape_string($conn, $_POST['pass']);

    // Check if the input is an email or username
    if (filter_var($username_or_email, FILTER_VALIDATE_EMAIL)) {
        $query = "SELECT * FROM users WHERE email = '$username_or_email'";
    } else {
        $query = "SELECT * FROM users WHERE username = '$username_or_email'";
    }

    $result = mysqli_query($conn, $query);
    if ($result && mysqli_num_rows($result) > 0) {
        $user = mysqli_fetch_assoc($result);

        // Verify password
        if (password_verify($pass, $user['password'])) {
            // Set session variables
            $userID = $user['id'];
            $banQuery = "SELECT * FROM banned WHERE userID = '$userID'";
            $banResult = mysqli_query($conn, $banQuery);
            $rowBan = mysqli_fetch_assoc($banResult);
            $banCount = $rowBan['banDays'];

            if($banResult && mysqli_num_rows($banResult) > 0)
            {
                header('Location: login.php?banned=Account%20restricted.<a href="contact.php">%20Contact%20support</a>.&bandays='. $banCount .'');
                exit;
            } else {
                $_SESSION['user_id'] = $user['id'];
                $_SESSION['username'] = $user['username'];
                $_SESSION['email'] = $user['email'];
                header('Location: index.php?success=Login%20successful.');
                exit();
            }
        } else {
            header('Location: login.php?error=Incorrect%20password.');
            exit();
        }
    } else {
        header('Location: login.php?error=User%20not%20found.');
        exit();
    }
} else {
    header('Location: login.php?error=Please%20fill%20out%20all%20fields.');
    exit();
}
?>