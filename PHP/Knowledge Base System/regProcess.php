<?php include 'Assets/config.php'; ?>
<?php
    if(!empty($_POST['name']) &&
    !empty($_POST['username']) &&
    !empty($_POST['email']) &&
    !empty($_POST['cemail']) &&
    !empty($_POST['pass']) &&
    !empty($_POST['cpass']))
    {
        $name = mysqli_real_escape_string($conn, $_POST['name']);
        $username = mysqli_real_escape_string($conn, $_POST['username']);
        $email = mysqli_real_escape_string($conn, $_POST['email']);
        $cemail = mysqli_real_escape_string($conn, $_POST['cemail']);
        $pass = mysqli_real_escape_string($conn, $_POST['pass']);
        $cpass = mysqli_real_escape_string($conn, $_POST['cpass']);

        if(strlen($name) < 3 || strlen($name) > 20)
        {
            header('Location: register.php?error=Full%20name%20should%20contain%203%20-%2020%20characters.');
            exit;
        }

        if(strlen($username) < 6 || strlen($username) > 25)
        {
            header('Location: register.php?error=Username%20should%20contain%206%20-%2025%20characters.');
            exit;
        }

        if(!filter_var($email, FILTER_VALIDATE_EMAIL))
        {
            header('Location: register.php?error=Invalid%20e-mail%20format.');
            exit;
        }

        if($email != $cemail)
        {
            header('Location: register.php?error=E-mail%20addresses%20not%20match.');
            exit;
        }

        if(strlen($pass) < 8 || strlen($pass) > 18)
        {
            header('Location: register.php?error=Password%20should%20contain%208%20-%2018%20characters');
            exit;
        }

        if($pass != $cpass)
        {
            header("Location: register.php?error=Passwords%20doesn't%20match.");
            exit;
        }

        if (!preg_match('/^(?=.*[a-z])(?=.*[A-Z])(?=.*\W).{8,16}$/', $pass)) {
            header('Location: register.php?error=Password%20must%20be%208-16%20characters%20long%20with%20at%20least%20one%20lowercase%20letter,%20one%20uppercase%20letter,%20and%20one%20special%20character.');
            exit();
        }

        $takenEmail = "SELECT id FROM accounts WHERE email = '$email'";
        $emailResults = mysqli_query($conn, $takenEmail);
        if($emailResults && mysqli_num_rows($emailResults) > 0)
        {
            header('Location: register.php?error=User%20already%20exists.');
            exit();
        }

        $takenUsername = "SELECT id FROM accounts WHERE username = '$username'";
        $userResults = mysqli_query($conn, $takenUsername);
        if($userResults && mysqli_num_rows($userResults) > 0)
        {
            header('Location: register.php?error=User%20already%20exists.');
            exit();
        }

        $query = "INSERT INTO accounts (name, username, email, password) VALUES('$name', '$username', '$email', '" . password_hash($pass, PASSWORD_DEFAULT) . "')";
        if(!mysqli_query($conn, $query))
        {
            die(mysqli_error($conn));
        } else {
            header('Location: login.php?registered.');
            exit;
        }
    } else {
        header('Location: register.php?error=Please%20fill%20in%20all%20fields.');
        exit;
    }
?>