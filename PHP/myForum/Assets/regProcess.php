<?php include 'Assets/config.php'; ?>
<?php
    $query = 'SELECT * FROM accounts';
    $results = mysqli_query($conn, $query);
    $rowAcc = mysqli_fetch_assoc($results);
?>

<?php
    if(!empty($_POST['username']) && !empty($_POST['name']) && !empty($_POST['email'])
    && !empty($_POST['cemail']) && !empty($_POST['pass']) && !empty($_POST['cpass']))
    {
        $username = mysqli_real_escape_string($conn, $_POST['username']);
        $name = mysqli_real_escape_string($conn, $_POST['name']);
        $email = mysqli_real_escape_string($conn, $_POST['email']);
        $cemail = mysqli_real_escape_string($conn, $_POST['cemail']);
        $pass = mysqli_real_escape_string($conn, $_POST['pass']);
        $cpass = mysqli_real_escape_string($conn, $_POST['cpass']);
        $hashed_pass = password_hash($pass, PASSWORD_DEFAULT);

        if($rowAcc['username'] == $username)
        {
            header('Location: register.php?error=Username%20is%20already%20in%20use.');
            exit;
        }

        if(strlen($username) < 8 || strlen($username) > 12) {
            header('Location: register.php?error=Username%20must%20be%208-12%20characters%20long.');
            exit();
        }

        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            header('Location: register.php?error=Invalid%20email%20format.');
            exit();
        }

        if($rowAcc['email'] == $email)
        {
            header('Location: register.php?error=Email%20is%20already%20in%20use.');
            exit;
        }

        if($email != $cemail)
        {
            header('Location: register.php?error=Email%20address%20Does%20not%20match.');
            exit;
        }

        if(strlen($pass) < 8 || strlen($pass) > 15)
        {
            header('Location: register.php?error=Passwords%20has%20to%20be%208%20-%2015%20characters.');
            exit;
        }

        if($pass != $cpass)
        {
            header('Location: register.php?error=Passwords%20Does%20not%20match.');
            exit;
        }

        if (!preg_match('/^(?=.*[a-z])(?=.*[A-Z])(?=.*\W).{8,16}$/', $pass)) {
            header('Location: register.php?error=Password%20must%20be%208-16%20characters%20long%20with%20at%20least%20one%20lowercase%20letter,%20one%20uppercase%20letter,%20and%20one%20special%20character.');
            exit();
        }

        // Insert new user into the database
        $regQuery = "INSERT INTO accounts (username, name, email, pass) VALUES ('$username', '$name', '$email', '$hashed_pass')";
        if (mysqli_query($conn, $regQuery)) {
            session_start();
            $_SESSION['id'] = mysqli_insert_id($conn); // Get the last inserted ID
            $_SESSION['username'] = $username;
            $_SESSION['email'] = $email;
            header('Location: ../Account.php');
            exit();
        } else {
            echo "Error: " . $regQuery . "<br>" . mysqli_error($conn);
        }

    } else {
        header('Location: register.php?error=Fill%20all%20fields.');
        exit;
    }
?>