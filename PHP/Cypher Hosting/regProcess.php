<?php include 'assets/config.php'; ?>
<?php
if (
    !empty($_POST['name']) &&
    !empty($_POST['username']) &&
    !empty($_POST['email']) &&
    !empty($_POST['cemail']) &&
    !empty($_POST['pass']) &&
    !empty($_POST['cpass'])
) {
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $confirm_email = mysqli_real_escape_string($conn, $_POST['cemail']);
    $pass = mysqli_real_escape_string($conn, $_POST['pass']);
    $confirm_pass = mysqli_real_escape_string($conn, $_POST['cpass']);
    $createDate = date('Y-m-d H:i:s'); // Current timestamp

    // Validate username length
    if (strlen($username) < 8 || strlen($username) > 12) {
        header('Location: register.php?error=Username%20must%20be%208-12%20characters%20long.');
        exit();
    }

    // Validate email match
    if ($email !== $confirm_email) {
        header('Location: register.php?error=Emails%20do%20not%20match.');
        exit();
    }

    // Validate email format
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        header('Location: register.php?error=Invalid%20email%20format.');
        exit();
    }

    // Validate password match
    if ($pass !== $confirm_pass) {
        header('Location: register.php?error=Passwords%20do%20not%20match.');
        exit();
    }

    // Validate password strength
    if (!preg_match('/^(?=.*[a-z])(?=.*[A-Z])(?=.*\W).{8,16}$/', $pass)) {
        header('Location: register.php?error=Password%20must%20be%208-16%20characters%20long%20with%20at%20least%20one%20lowercase%20letter,%20one%20uppercase%20letter,%20and%20one%20special%20character.');
        exit();
    }

    // Check if the username already exists
    $check_username_query = "SELECT id FROM users WHERE username = '$username'";
    $result = mysqli_query($conn, $check_username_query);
    if (mysqli_num_rows($result) > 0) {
        header('Location: register.php?error=Username%20already%20exists.');
        exit();
    }

    // Check if the email already exists
    $check_email_query = "SELECT id FROM users WHERE email = '$email'";
    $result = mysqli_query($conn, $check_email_query);
    if (mysqli_num_rows($result) > 0) {
        header('Location: register.php?error=Email%20already%20registered.');
        exit();
    }

    // Query to insert user data
    $query = "INSERT INTO users (name, username, email, password, createDate) VALUES ('$name', '$username', '$email', '" . password_hash($pass, PASSWORD_DEFAULT) . "', '$createDate')";

    if (!mysqli_query($conn, $query)) {
        die(mysqli_error($conn));
    } else {
        header('Location: login.php?success=Registration%20successful.');
    }
} else {
    header('Location: register.php?error=Please%20fill%20out%20all%20fields.');
}
?>